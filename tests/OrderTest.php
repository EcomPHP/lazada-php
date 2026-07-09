<?php
namespace EcomPHP\Lazada\Tests;

use EcomPHP\Lazada\Client;
use EcomPHP\Lazada\Resources\Order;
use GuzzleHttp\RequestOptions;
use PHPUnit\Framework\TestCase;

class OrderTestClient extends Client
{
    public $calls = array();

    public function call($method, $uri, $params = array(), $wrapDataKey = 'data')
    {
        $this->calls[] = array($method, $uri, $params, $wrapDataKey);

        return end($this->calls);
    }
}

class OrderTest extends TestCase
{
    public function testCreatesRequestsForCurrentOrderApis()
    {
        $client = new OrderTestClient('app-key', 'app-secret', 'callback-url');
        $resource = (new Order())->useApiClient($client);

        $ordersParams = array('created_after' => '2026-07-01T00:00:00+0800', 'status' => 'pending');

        $apis = array(
            array($resource->GetDocument('invoice', array('item-1', 'item-2')), 'GET', 'order/document/get', array(RequestOptions::QUERY => array(
                'doc_type' => 'invoice',
                'order_item_ids' => '[item-1,item-2]',
            ))),
            array($resource->GetOrder('order-1'), 'GET', 'order/get', array(RequestOptions::QUERY => array(
                'order_id' => 'order-1',
            ))),
            array($resource->GetOrders($ordersParams), 'GET', 'orders/get', array(RequestOptions::QUERY => $ordersParams)),
            array($resource->GetOrderItems('order-1'), 'GET', 'order/items/get', array(RequestOptions::QUERY => array(
                'order_id' => 'order-1',
            ))),
            array($resource->GetMultipleOrderItems(array('order-1', 'order-2')), 'GET', 'orders/items/get', array(RequestOptions::QUERY => array(
                'order_ids' => '[order-1,order-2]',
            ))),
            array($resource->GetOVOOrders('trade-order-1,trade-order-2'), 'GET', 'orders/ovo/get', array(RequestOptions::QUERY => array(
                'tradeOrderIds' => 'trade-order-1,trade-order-2',
            ))),
            array($resource->OrderCancelValidate('order-1', array('item-1', 'item-2')), 'GET', 'order/reverse/cancel/validate', array(RequestOptions::QUERY => array(
                'order_id' => 'order-1',
                'order_item_id_list' => '[item-1,item-2]',
            ))),
            array($resource->SetInvoiceNumber('item-1', 'invoice-1'), 'POST', 'order/invoice_number/set', array(RequestOptions::FORM_PARAMS => array(
                'order_item_id' => 'item-1',
                'invoice_number' => 'invoice-1',
            ))),
            array($resource->SetStatusToReadyToShip(array('item-1', 'item-2'), 'provider-1', 'tracking-1'), 'POST', 'order/rts', array(RequestOptions::FORM_PARAMS => array(
                'delivery_type' => 'dropship',
                'order_item_ids' => '[item-1,item-2]',
                'shipment_provider' => 'provider-1',
                'tracking_number' => 'tracking-1',
            ))),
        );

        foreach ($apis as $api) {
            $this->assertSame(array($api[1], $api[2], $api[3], 'data'), $api[0]);
        }
    }
}