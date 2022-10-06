<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NVuln\Lazada\Resources;

use GuzzleHttp\RequestOptions;
use NVuln\Lazada\Resource;

class Order extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fdocument%2Fawb%2Fpdf%2Fget
     */
    public function GetAwbDocumentPDF($order_item_ids)
    {
        $order_item_ids = is_array($order_item_ids) ? implode(',', $order_item_ids) : $order_item_ids;

        return $this->call('GET', 'order/document/awb/pdf/get', [
            RequestOptions::QUERY => [
                'order_item_ids' => $order_item_ids,
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fdocument%2Fget
     */
    public function GetDocument($doc_type, $order_item_ids)
    {
        $order_item_ids = is_array($order_item_ids) ? implode(',', $order_item_ids) : $order_item_ids;

        return $this->call('GET', 'order/document/get', [
            RequestOptions::QUERY => [
                'doc_type' => $doc_type,
                'order_item_ids' => $order_item_ids,
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
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Frts
     */
    public function SetStatusToReadyToShip($item_ids, $shipment_provider, $tracking_number)
    {
        $item_ids = is_array($item_ids) ? implode(',', $item_ids) : $item_ids;

        $response = $this->call('POST', 'order/rts', [
            RequestOptions::FORM_PARAMS => [
                'delivery_type' => 'dropship',
                'order_item_ids' => $item_ids,
                'shipment_provider' => $shipment_provider,
                'tracking_number' => $tracking_number,
            ]
        ]);

        return json_decode((string)$response->getBody(), true);
    }
}
