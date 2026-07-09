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

class Order extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fdocument%2Fget
     */
    public function GetDocument($doc_type, $order_item_ids)
    {
        return $this->call('GET', 'order/document/get', [
            RequestOptions::QUERY => [
                'doc_type' => $doc_type,
                'order_item_ids' => static::formatListIds($order_item_ids),
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fget
     */
    public function GetOrder($order_id)
    {
        return $this->call('GET', 'order/get', [
            RequestOptions::QUERY => [
                'order_id' => $order_id,
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forders%2Fget
     */
    public function GetOrders($params = [])
    {
        return $this->call('GET', 'orders/get', [
            RequestOptions::QUERY => $params
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fitems%2Fget
     */
    public function GetOrderItems($order_id)
    {
        return $this->call('GET', 'order/items/get', [
            RequestOptions::QUERY => [
                'order_id' => $order_id,
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forders%2Fitems%2Fget
     */
    public function GetMultipleOrderItems($order_ids)
    {
        return $this->call('GET', 'orders/items/get', [
            RequestOptions::QUERY => [
                'order_ids' => static::formatListIds($order_ids),
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forders%2Fovo%2Fget
     */
    public function GetOVOOrders($tradeOrderIds)
    {
        return $this->call('GET', 'orders/ovo/get', [
            RequestOptions::QUERY => [
                'tradeOrderIds' => $tradeOrderIds,
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Freverse%2Fcancel%2Fvalidate
     */
    public function OrderCancelValidate($order_id, $order_item_id_list)
    {
        return $this->call('GET', 'order/reverse/cancel/validate', [
            RequestOptions::QUERY => [
                'order_id' => $order_id,
                'order_item_id_list' => static::formatListIds($order_item_id_list),
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Finvoice_number%2Fset
     */
    public function SetInvoiceNumber($order_item_id, $invoice_number)
    {
        return $this->call('POST', 'order/invoice_number/set', [
            RequestOptions::FORM_PARAMS => [
                'order_item_id' => $order_item_id,
                'invoice_number' => $invoice_number,
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Frts
     */
    public function SetStatusToReadyToShip($item_ids, $shipment_provider, $tracking_number)
    {
        return $this->call('POST', 'order/rts', [
            RequestOptions::FORM_PARAMS => [
                'delivery_type' => 'dropship',
                'order_item_ids' => static::formatListIds($item_ids),
                'shipment_provider' => $shipment_provider,
                'tracking_number' => $tracking_number,
            ]
        ]);
    }
}
