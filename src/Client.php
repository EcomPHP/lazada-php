<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\Lazada;

use EcomPHP\Lazada\Errors\LazadaException;
use EcomPHP\Lazada\Errors\ResponseException;
use EcomPHP\Lazada\Errors\TokenException;
use EcomPHP\Lazada\Resources\Finance;
use EcomPHP\Lazada\Resources\Logistic;
use EcomPHP\Lazada\Resources\Order;
use EcomPHP\Lazada\Resources\Product;
use EcomPHP\Lazada\Resources\System;
use EcomPHP\Lazada\Resources\Wallet;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @property-read \EcomPHP\Lazada\Resources\System $System
 * @property-read \EcomPHP\Lazada\Resources\Order $Order
 * @property-read \EcomPHP\Lazada\Resources\Finance $Finance
 * @property-read \EcomPHP\Lazada\Resources\Product $Product
 * @property-read \EcomPHP\Lazada\Resources\Logistic $Logistic
 */
class Client
{
    public const resources = [
        System::class,
        Order::class,
        Finance::class,
        Product::class,
        Logistic::class,
        Wallet::class,
    ];

    protected $region;
    protected $app_key;
    protected $app_secret;
    protected $callback_url;

    protected $access_token;

    public function __construct($appKey, $appSecret, $callbackUrl)
    {
        $this->app_key = $appKey;
        $this->app_secret = $appSecret;
        $this->callback_url = $callbackUrl;
    }

    public function setAccessToken($accessToken, $region)
    {
        $region = strtolower($region);
        $this->access_token = $accessToken;

        $availableCountries = ['vn', 'sg', 'my', 'th', 'ph', 'id'];
        if (!in_array($region, $availableCountries)) {
            throw new LazadaException("Region '$region' is not valid.");
        }

        $this->region = $region;
    }

    public function accessToken()
    {
        return $this->access_token;
    }

    public function region()
    {
        return $this->region;
    }

    public function appKey()
    {
        return $this->app_key;
    }

    public function appSecret()
    {
        return $this->app_secret;
    }

    public function callbackUrl()
    {
        return $this->callback_url;
    }

    public function auth()
    {
        return new Auth($this);
    }

    /**
     * Magic call resource
     *
     * @param $resourceName
     * @throws LazadaException
     * @return \EcomPHP\Lazada\Resource
     */
    public function __get($resourceName)
    {
        $resourceClassName = __NAMESPACE__."\\Resources\\".$resourceName;
        if (!in_array($resourceClassName, self::resources)) {
            throw new LazadaException("Invalid resource ".$resourceName);
        }

        /** @var \EcomPHP\Lazada\Resource $resource */
        $resource = new $resourceClassName();
        $resource->useApiClient($this);

        if (!$resource instanceof Resource) {
            throw new LazadaException("Invalid resource class ".$resourceClassName);
        }

        return $resource;
    }

    public function call($method, $uri, $params = [], $wrapDataKey = 'data')
    {
        $response = $this->httpClient()->request($method, $uri, $params);
        $json = json_decode($response->getBody()->getContents(), true);
        if (!is_array($json)) {
            return $response->getBody()->getContents();
        }

        $code = $json['code'] ?? -1;
        if ($code !== '0') {
            $this->handleErrorResponse($code, $json['message'] ?? '');
        }

        return $json[$wrapDataKey] ?? $json;
    }

    protected function handleErrorResponse($code, $message)
    {
        if (in_array($code, ['IllegalRefreshToken', 'IllegalAccessToken'])) {
            throw new TokenException($message, $code);
        }

        throw new ResponseException($message, $code);
    }

    public function httpClient()
    {
        $stack = HandlerStack::create();

        /**
         * modify request
         * append: app_key, sign, sign_method, access_token, timestamp
         */
        $stack->push(Middleware::mapRequest(function (RequestInterface $request) {
            $uri = $request->getUri();
            parse_str($uri->getQuery(), $query);
            $query['app_key'] = $this->appKey();
            $query['sign_method'] = 'sha256';

            if ($this->accessToken() && !isset($query['access_token'])) {
                $query['access_token'] = $this->accessToken();
            }

            list(, $sec) = explode(' ', microtime());
            $query['timestamp'] = $sec . '000';
            $path = $uri->getPath();
            if (strpos($path, '/rest') === 0) {
                $path = substr($path, 5);
            }

            $signatureParams = $query;

            // merge post content with query params to calculate signature
            $method = strtoupper($request->getMethod());
            if ($method === 'POST') {
                $contentType = $request->getHeader('content-type')[0] ?? 'application/x-www-form-urlencoded';
                if ($contentType === 'application/json') {
                    $dataPost = json_decode($request->getBody()->getContents(), true);
                }
                else {
                    parse_str($request->getBody()->getContents(), $dataPost);
                }

                $dataPost = array_map(function ($v) {
                    return is_array($v) ? json_encode($v) : $v;
                }, $dataPost);

                $signatureParams = array_merge($dataPost, $signatureParams);

                $request = $request->withBody(Utils::streamFor(json_encode($dataPost)))
                    ->withHeader('content-type', 'application/json');
            }

            $query['sign'] = $this->prepareSignature($path, $signatureParams);

            $uri = $uri->withQuery(http_build_query($query));

            return $request->withUri($uri);
        }));

        $stack->push(Middleware::retry(function (
            $retries,
            RequestInterface $request,
            ResponseInterface $response = null,
            TransferException $exception = null
        ) {
            if ($retries >= 2) {
                return false;
            }

            if ($exception instanceof ConnectException) {
                return true;
            }

            return false;
        }, function () {
            return 1500;
        }));

        return new HttpClient([
            RequestOptions::HTTP_ERRORS => false, // disable throw exception, manual handle it
            'handler' => $stack,
            'base_uri' => $this->baseUrl() . '/',
        ]);
    }

    protected function prepareSignature($uri, $params)
    {
        ksort($params);

        $stringToBeSigned = $uri;
        foreach ($params as $k => $v) {
            $stringToBeSigned .= "$k$v";
        }

        return strtoupper(hash_hmac('sha256', $stringToBeSigned, $this->appSecret()));
    }

    /**
     * api endpoint
     *
     * @return string|null
     */
    protected function baseUrl()
    {
        $endpoints = [
            'vn' => 'https://api.lazada.vn/rest',
            'sg' => 'https://api.lazada.sg/rest',
            'my' => 'https://api.lazada.com.my/rest',
            'th' => 'https://api.lazada.co.th/rest',
            'ph' => 'https://api.lazada.com.ph/rest',
            'id' => 'https://api.lazada.co.id/rest',
        ];

        return $endpoints[$this->region()] ?? $endpoints['vn'];
    }
}
