<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\Lazada\Resources;

use EcomPHP\Lazada\Resource;

class RedMart extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frss%2Fpickup-job%2Fget
     */
    public function RssGetOnePickupJob($params = [])
    {
        return $this->get('rss/pickup-job/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frss%2Fpickup-jobs%2Fget
     */
    public function RssGetPickupJobs($params = [])
    {
        return $this->get('rss/pickup-jobs/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frss%2FpickupLocations%2Fget
     */
    public function RssGetPickupLocations($params = [])
    {
        return $this->get('rss/pickupLocations/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frss%2Fproduct%2Fget
     */
    public function RssGetProduct($params = [])
    {
        return $this->get('rss/product/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frss%2Fproducts%2Fget
     */
    public function RssGetProducts($params = [])
    {
        return $this->get('rss/products/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frss%2FstockLot%2Fget
     */
    public function RssGetStockLot($params = [])
    {
        return $this->get('rss/stockLot/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frss%2FstockLots%2Fget
     */
    public function RssGetStockLots($params = [])
    {
        return $this->get('rss/stockLots/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frss%2FstockLot%2Fupdate
     */
    public function RssUpdateStockLot($params = [])
    {
        return $this->get('rss/stockLot/update', $params);
    }
}
