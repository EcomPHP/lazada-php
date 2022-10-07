<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NVuln\Lazada;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\RequestOptions;
use NVuln\Lazada\Errors\ResponseException;
use NVuln\Lazada\Errors\TokenException;
use Psr\Http\Message\RequestInterface;

abstract class Resource
{
    /** @var Client */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * api endpoint
     *
     * @return string|null
     */
    protected function getApiEndpoint()
    {
        $endpoints = [
            'vn' => 'https://api.lazada.vn/rest',
            'sg' => 'https://api.lazada.sg/rest',
            'my' => 'https://api.lazada.com.my/rest',
            'th' => 'https://api.lazada.co.th/rest',
            'ph' => 'https://api.lazada.com.ph/rest',
            'id' => 'https://api.lazada.co.id/rest',
        ];

        // region vn as default
        return $endpoints[$this->client->region()] ?? $endpoints['vn'];
    }

    protected function httpClient()
    {
        $stack = HandlerStack::create();
        $stack->push(Middleware::mapRequest(function (RequestInterface $request) {
            $uri = $request->getUri();
            parse_str($uri->getQuery(), $query);
            $query['app_key'] = $this->client->appKey();
            $query['sign_method'] = 'sha256';
            $query['access_token'] = $this->client->accessToken();

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
                    $dataPost = json_decode($request->getBody()->getContents());
                }
                else {
                    parse_str($request->getBody()->getContents(), $dataPost);
                }

                $signatureParams = array_merge($dataPost, $signatureParams);
            }

            $query['sign'] = $this->prepareSignature($path, $signatureParams);

            $uri = $uri->withQuery(http_build_query($query));

            return $request->withUri($uri);
        }));

        return new HttpClient([
            RequestOptions::HTTP_ERRORS => false, // disable throw exception, manual handle it
            'handler' => $stack,
            'base_uri' => $this->getApiEndpoint() . '/',
        ]);
    }

    protected function prepareSignature($uri, $params)
    {
        ksort($params);

        $stringToBeSigned = $uri;
        foreach ($params as $k => $v)
        {
            $stringToBeSigned .= "$k$v";
        }

        return strtoupper(hash_hmac('sha256', $stringToBeSigned, $this->client->appSecret()));
    }

    public function call($method, $uri, $params = [], $wrapDataKey = 'data')
    {
        $response = $this->httpClient()->request($method, $uri, $params);
        $json = json_decode($response->getBody()->getContents(), true);
        $code = $json['code'] ?? -1;
        if (is_array($json) && $code !== '0') {
            $this->handleErrorResponse($code, $json['message'] ?? '');
        }

        if (!is_array($json)) {
            return $response->getBody()->getContents();
        }

        return $json[$wrapDataKey] ?? $json;
    }

    /**
     * @param $code
     * @param $message
     * @throws \NVuln\Lazada\Errors\ResponseException
     * @throws \NVuln\Lazada\Errors\TokenException
     * @return void
     */
    protected function handleErrorResponse($code, $message)
    {
        if (in_array($code, ['IllegalRefreshToken', 'IllegalAccessToken'])) {
            throw new TokenException($message, $code);
        }

        throw new ResponseException($message, $code);
    }
}
