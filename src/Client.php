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

use NVuln\Lazada\Errors\LazadaException;
use NVuln\Lazada\Resources\Finance;
use NVuln\Lazada\Resources\Order;
use NVuln\Lazada\Resources\Product;
use NVuln\Lazada\Resources\System;

/**
 * @property-read \NVuln\Lazada\Resources\System $System
 * @property-read \NVuln\Lazada\Resources\Order $Order
 * @property-read \NVuln\Lazada\Resources\Finance $Finance
 * @property-read \NVuln\Lazada\Resources\Product $Product
 */
class Client
{
    public const resources = [
        System::class,
        Order::class,
        Finance::class,
        Product::class,
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
     * @return \NVuln\Lazada\Resource
     */
    public function __get($resourceName)
    {
        $resourceClassName = __NAMESPACE__."\\Resources\\".$resourceName;
        if (!in_array($resourceClassName, self::resources)) {
            throw new LazadaException("Invalid resource ".$resourceName);
        }

        //Initiate the resource object
        $resource = new $resourceClassName($this);
        if (!$resource instanceof Resource) {
            throw new LazadaException("Invalid resource class ".$resourceClassName);
        }

        return $resource;
    }
}
