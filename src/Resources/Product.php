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

use GuzzleHttp\RequestOptions;
use EcomPHP\Lazada\Resource;

class Product extends Resource
{

    public function GetProductItem($item_id = null, $seller_sku = null)
    {
        $params = array_filter([
            'item_id' => $item_id,
            'seller_sku' => $seller_sku
        ]);

        return $this->call('GET', 'product/item/get', [
            RequestOptions::QUERY => $params
        ]);
    }

    public function GetProducts($params = [])
    {
        return $this->call('GET', 'products/get', [
            RequestOptions::QUERY => $params
        ]);
    }
}
