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

class FBL extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku_relation%2Fwrite
     */
    public function BuildFulfillmentSkuRelation($params = [])
    {
        return $this->post('fbl/fulfillment_sku_relation/write', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_order%2Fcancel
     */
    public function CancelFulfillmentOrderForMCL($params = [])
    {
        return $this->post('fbl/fulfillment_order/cancel', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_reservation%2Fcancel
     */
    public function CancelInboundReservation($params = [])
    {
        return $this->post('fbl/inbound_reservation/cancel', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Foutbound_order%2Fcancel
     */
    public function CancelOutboundOrder($params = [])
    {
        return $this->post('fbl/outbound_order/cancel', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fvas%2FcancelVasOrder
     */
    public function CancelVasOrder4FBL($params = [])
    {
        return $this->get('fbl/vas/cancelVasOrder', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_order%2Fcancel
     */
    public function CancelnBoundOrder($params = [])
    {
        return $this->post('fbl/inbound_order/cancel', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_reservation%2Fcheck
     */
    public function CheckInboundReservationSlot($params = [])
    {
        return $this->get('fbl/inbound_reservation/check', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_order%2Fcreate
     */
    public function CreateFulfillmentOrderForMCL($params = [])
    {
        return $this->post('fbl/fulfillment_order/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_order_pnf%2Fcreate
     */
    public function CreateFulfillmentOrderForMCLV2PNF($params = [])
    {
        return $this->post('fbl/fulfillment_order_pnf/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku%2Fcreate
     */
    public function CreateFulfillmentSkuDecouple($params = [])
    {
        return $this->post('fbl/fulfillment_sku/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku_fbl%2Fcreate
     */
    public function CreateFulfillmentSkuForFBL($params = [])
    {
        return $this->post('fbl/fulfillment_sku_fbl/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_order%2Fcreate
     */
    public function CreateInboundOrder($params = [])
    {
        return $this->post('fbl/inbound_order/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_reservation%2Fcreate
     */
    public function CreateInboundReservation($params = [])
    {
        return $this->post('fbl/inbound_reservation/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Foutbound_order%2Fcreate
     */
    public function CreateOutBoundOrder($params = [])
    {
        return $this->post('fbl/outbound_order/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fproduct_reinbound%2Fcreate
     */
    public function CreateProductReinboundOrderForMCL($params = [])
    {
        return $this->post('fbl/product_reinbound/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fvas%2FcreateVasOrder
     */
    public function CreateVasOrder4FBL($params = [])
    {
        return $this->get('fbl/vas/createVasOrder', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fchannel_stocks%2Fget
     */
    public function GetChannelStocksForMCL($params = [])
    {
        return $this->get('fbl/channel_stocks/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_products%2Fget
     */
    public function GetFulfillmentProductDetail($params = [])
    {
        return $this->get('fbl/fulfillment_products/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku_list%2Fget
     */
    public function GetFulfillmentSkuListForMCL($params = [])
    {
        return $this->get('fbl/fulfillment_sku_list/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku_relation%2Fget_by_sc_item
     */
    public function GetFulfillmentSkuRelationByScItem($params = [])
    {
        return $this->get('fbl/fulfillment_sku_relation/get_by_sc_item', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku_relation%2Fget_by_sku
     */
    public function GetFulfillmentSkuRelationBySku($params = [])
    {
        return $this->get('fbl/fulfillment_sku_relation/get_by_sku', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku_relation%2Fget_by_sc_items
     */
    public function GetFulfillmentSkuRelationsByScItems($params = [])
    {
        return $this->get('fbl/fulfillment_sku_relation/get_by_sc_items', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku_relation%2Fget_by_skus
     */
    public function GetFulfillmentSkuRelationsBySkus($params = [])
    {
        return $this->get('fbl/fulfillment_sku_relation/get_by_skus', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ficp_order%2Ffile
     */
    public function GetIcpOrderFile($params = [])
    {
        return $this->get('fbl/icp_order/file', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_order_detail%2Fget
     */
    public function GetInboundOrderDetail($params = [])
    {
        return $this->get('fbl/inbound_order_detail/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_orders%2Fget
     */
    public function GetInboundOrderList($params = [])
    {
        return $this->get('fbl/inbound_orders/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_reservation%2Ffile
     */
    public function GetInboundReservationFile($params = [])
    {
        return $this->get('fbl/inbound_reservation/file', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finventory_changed_sku%2Fget
     */
    public function GetInventoryChangedSKU($params = [])
    {
        return $this->get('fbl/inventory_changed_sku/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finventory_occupy_details%2Fget
     */
    public function GetInventoryOccupyDetails($params = [])
    {
        return $this->get('fbl/inventory_occupy_details/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finventory_operate_log%2Fget
     */
    public function GetInventoryOperateLog($params = [])
    {
        return $this->get('fbl/inventory_operate_log/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Foutbound_order_detail%2Fget
     */
    public function GetOutboundOrderDetail($params = [])
    {
        return $this->get('fbl/outbound_order_detail/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Foutbound_orders%2Fget
     */
    public function GetOutboundOrderList($params = [])
    {
        return $this->get('fbl/outbound_orders/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fplatform_products%2Fget2
     */
    public function GetPlatformProductsV2($params = [])
    {
        return $this->get('fbl/platform_products/get2', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fproduct_batch%2Fquery
     */
    public function GetProductBatchList($params = [])
    {
        return $this->get('fbl/product_batch/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fshipper%2Fget
     */
    public function GetShipperInfo($params = [])
    {
        return $this->get('fbl/shipper/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fstock_rule%2Fget
     */
    public function GetStockRule($params = [])
    {
        return $this->get('fbl/stock_rule/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fvas%2FgetVasOrderByNo
     */
    public function GetVasOrderByNo4FBL($params = [])
    {
        return $this->get('fbl/vas/getVasOrderByNo', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fwarehouses%2Fget
     */
    public function GetWarehouseListForMCL($params = [])
    {
        return $this->get('fbl/warehouses/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fstocks%2Fget
     */
    public function GetWarehouseStock($params = [])
    {
        return $this->get('fbl/stocks/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fstocks%2FgetV3
     */
    public function GetWarehouseStockV3($params = [])
    {
        return $this->get('fbl/stocks/getV3', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ficp_warehouse%2Flist
     */
    public function ListIcpWarehouse($params = [])
    {
        return $this->get('fbl/icp_warehouse/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_order_list%2Fget
     */
    public function QueryFulfillmentOrderForMCL($params = [])
    {
        return $this->get('fbl/fulfillment_order_list/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_batch%2Fquery
     */
    public function QueryInboundBatch($params = [])
    {
        return $this->get('fbl/inbound_batch/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Finbound_reservation%2Fget
     */
    public function QueryInboundReservationOrder($params = [])
    {
        return $this->get('fbl/inbound_reservation/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Freverse_order%2Fget
     */
    public function QueryReverseOrderForMCL($params = [])
    {
        return $this->get('fbl/reverse_order/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku_relation%2Fremove
     */
    public function RemoveFulfillmentSkuRelation($params = [])
    {
        return $this->post('fbl/fulfillment_sku_relation/remove', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Freturns%2Fcancel
     */
    public function ReturnCancellation($params = [])
    {
        return $this->post('fbl/returns/cancel', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Freturns%2Fcreate
     */
    public function ReturnOrderCreation($params = [])
    {
        return $this->post('fbl/returns/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fstock_rule%2Fset
     */
    public function SetStockRule($params = [])
    {
        return $this->post('fbl/stock_rule/set', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Ffulfillment_sku%2Fupdate
     */
    public function UpdateFulfillmentSkuDecouple($params = [])
    {
        return $this->post('fbl/fulfillment_sku/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffbl%2Fwaybill%2Fupload
     */
    public function UploadWaybill($params = [])
    {
        return $this->get('fbl/waybill/upload', $params);
    }
}
