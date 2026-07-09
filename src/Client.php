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
use EcomPHP\Lazada\Resources\ChoiceCustomized;
use EcomPHP\Lazada\Resources\Content;
use EcomPHP\Lazada\Resources\CrossBoarderProduct;
use EcomPHP\Lazada\Resources\ETickets;
use EcomPHP\Lazada\Resources\EarlyBirdPrice;
use EcomPHP\Lazada\Resources\FBL;
use EcomPHP\Lazada\Resources\Finance;
use EcomPHP\Lazada\Resources\FirstMileBigbagOnlyForCN;
use EcomPHP\Lazada\Resources\Flexicombo;
use EcomPHP\Lazada\Resources\FreeShipping;
use EcomPHP\Lazada\Resources\Fulfillment;
use EcomPHP\Lazada\Resources\InstantMessaging;
use EcomPHP\Lazada\Resources\LazLike;
use EcomPHP\Lazada\Resources\LazLive;
use EcomPHP\Lazada\Resources\LazPay;
use EcomPHP\Lazada\Resources\LazadaDG;
use EcomPHP\Lazada\Resources\LazadaLogistics;
use EcomPHP\Lazada\Resources\Logistic;
use EcomPHP\Lazada\Resources\LogisticsStation;
use EcomPHP\Lazada\Resources\MediaCenter;
use EcomPHP\Lazada\Resources\Membership;
use EcomPHP\Lazada\Resources\Order;
use EcomPHP\Lazada\Resources\Product;
use EcomPHP\Lazada\Resources\ProductReview;
use EcomPHP\Lazada\Resources\RedMart;
use EcomPHP\Lazada\Resources\ReturnAndRefund;
use EcomPHP\Lazada\Resources\Seller;
use EcomPHP\Lazada\Resources\SellerVoucher;
use EcomPHP\Lazada\Resources\ServiceMarket;
use EcomPHP\Lazada\Resources\SponsoredSolutions;
use EcomPHP\Lazada\Resources\StoreDecoration;
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
 * @property-read \EcomPHP\Lazada\Resources\Wallet $Wallet
 */
class Client
{
    public const AVAILABLE_REGIONS = ['vn', 'sg', 'my', 'th', 'ph', 'id'];

    /**
     * @var array<class-string<\EcomPHP\Lazada\Resource>>
     */
    protected $resources = [
        System::class,
        Seller::class,
        Order::class,
        Finance::class,
        Product::class,
        CrossBoarderProduct::class,
        ProductReview::class,
        StoreDecoration::class,
        MediaCenter::class,
        Flexicombo::class,
        SellerVoucher::class,
        FreeShipping::class,
        EarlyBirdPrice::class,
        ReturnAndRefund::class,
        Fulfillment::class,
        Logistic::class,
        FirstMileBigbagOnlyForCN::class,
        Membership::class,
        FBL::class,
        InstantMessaging::class,
        LazadaLogistics::class,
        ETickets::class,
        LazPay::class,
        Wallet::class,
        RedMart::class,
        LazadaDG::class,
        SponsoredSolutions::class,
        ServiceMarket::class,
        ChoiceCustomized::class,
        LazLike::class,
        LazLive::class,
        LogisticsStation::class,
        Content::class,
    ];

    protected $region;
    protected $app_key;
    protected $app_secret;
    protected $callback_url;

    protected $access_token;

    /**
     * Default options for Guzzle client.
     *
     * @var array
     */
    protected $options = [];

    public function __construct($appKey, $appSecret, $callbackUrl, $options = [])
    {
        $this->app_key = $appKey;
        $this->app_secret = $appSecret;
        $this->callback_url = $callbackUrl;
        $this->options = $options;
    }

    public function setAccessToken($accessToken, $region)
    {
        $region = strtolower($region);
        $this->access_token = $accessToken;

        if (!in_array($region, self::AVAILABLE_REGIONS, true)) {
            throw new LazadaException("Region '$region' is not valid. Available regions: " . implode(', ', self::AVAILABLE_REGIONS));
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
        if (!in_array($resourceClassName, $this->resources, true)) {
            $resourceClassName = null;

            foreach ($this->resources as $resourceClass) {
                if (strpos($resourceClass, __NAMESPACE__."\\Resources\\") === 0) {
                    continue;
                }

                $lookup = "\\".$resourceName;
                if (substr_compare($resourceClass, $lookup, -strlen($lookup)) === 0) {
                    $resourceClassName = $resourceClass;
                    break;
                }
            }
        }

        if ($resourceClassName === null) {
            throw new LazadaException("Invalid resource ".$resourceName);
        }

        /** @var \EcomPHP\Lazada\Resource $resource */
        $resource = new $resourceClassName();
        if (!$resource instanceof Resource) {
            throw new LazadaException("Invalid resource class ".$resourceClassName);
        }

        $resource->useApiClient($this);

        return $resource;
    }

    public function call($method, $uri, $params = [], $wrapDataKey = 'data')
    {
        $uri = trim($uri, '/');
        if (strpos($uri, 'rest/') === 0) {
            $uri = substr($uri, 5);
        }

        $response = $this->httpClient()->request($method, $uri, $params);
        $body = $response->getBody()->getContents();
        $json = json_decode($body, true);
        if (!is_array($json)) {
            return $body;
        }

        $code = $json['code'] ?? -1;
        if ((string) $code !== '0') {
            $this->handleErrorResponse($code, $json['message'] ?? '');
        }

        return $json[$wrapDataKey] ?? $json;
    }

    protected function handleErrorResponse($code, $message)
    {
        if (in_array($code, ['IllegalRefreshToken', 'IllegalAccessToken'], true)) {
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
                $contentType = $request->getHeaderLine('content-type') ?: 'application/x-www-form-urlencoded';
                if (stripos($contentType, 'application/json') !== false) {
                    $dataPost = json_decode($request->getBody()->getContents(), true);
                    $dataPost = is_array($dataPost) ? $dataPost : [];
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

        return new HttpClient(array_merge([
            RequestOptions::HTTP_ERRORS => false, // disable throw exception, manual handle it
            'handler' => $stack,
            'base_uri' => $this->baseUrl() . '/',
        ], $this->options));
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
