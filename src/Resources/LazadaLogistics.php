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

class LazadaLogistics extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fcustomers%2Fexternal_relationships_bundle
     */
    public function CreateCustomerAccountRelationshipByOTP($params = [])
    {
        return $this->get('logistics/epis/customers/external_relationships_bundle', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fcustomers%2Fexternal_relationships
     */
    public function CreateCustomerAccountRelationshipForExternal($params = [])
    {
        return $this->post('logistics/epis/customers/external_relationships', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fcustomers%2Fwarehouses
     */
    public function CreateOrUpdateCustomerWarehouse($params = [])
    {
        return $this->post('logistics/epis/customers/warehouses', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fexternal%2Fpackages
     */
    public function SendPackageInformation($params = [])
    {
        return $this->get('logistics/epis/external/packages', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fservice%2Fdelivery_options
     */
    public function EpisGetDeliveryOptions($params = [])
    {
        return $this->get('logistics/epis/service/delivery_options', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages%2Fcancel
     */
    public function EpisPackageCancellation($params = [])
    {
        return $this->post('logistics/epis/packages/cancel', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fexternal%2Fpackages%2Fcancel_status_update
     */
    public function EpisPackageCancellationStatusUpdate($params = [])
    {
        return $this->get('logistics/epis/external/packages/cancel_status_update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fexternal%2Fv2%2Fpackages%2Fcancel_status_update
     */
    public function EpisPackageCancellationStatusUpdateV2($params = [])
    {
        return $this->get('logistics/epis/external/v2/packages/cancel_status_update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages%2Fcancel%2Fv3
     */
    public function EpisPackageCancellationV3($params = [])
    {
        return $this->post('logistics/epis/packages/cancel/v3', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages%2Fconsign
     */
    public function EpisPackageConsignment($params = [])
    {
        return $this->post('logistics/epis/packages/consign', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages%2Fconsign%2Fv2
     */
    public function EpisPackageConsignmentV2($params = [])
    {
        return $this->post('logistics/epis/packages/consign/v2', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages
     */
    public function EpisPackageCreation($params = [])
    {
        return $this->post('logistics/epis/packages', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fexternal%2Fpackages%2Fdim_weight
     */
    public function EpisPackageDimweightUpdate($params = [])
    {
        return $this->get('logistics/epis/external/packages/dim_weight', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages%2Fupdate
     */
    public function EpisPackageInfoUpdate($params = [])
    {
        return $this->post('logistics/epis/packages/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages%2Fawb
     */
    public function EpisPackagePrintAwb($params = [])
    {
        return $this->get('logistics/epis/packages/awb', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages%2Freattempt
     */
    public function EpisPackageReAttempt($params = [])
    {
        return $this->post('logistics/epis/packages/reattempt', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fpackages%2Frts
     */
    public function EpisPackageReadyToBeShipped($params = [])
    {
        return $this->post('logistics/epis/packages/rts', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fexternal%2Fpackages%2Fstatuses
     */
    public function EpisPackageStatusUpdate($params = [])
    {
        return $this->get('logistics/epis/external/packages/statuses', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Ffulfillment%2Fupload_awb
     */
    public function EpisUploadAwbFulfillment($params = [])
    {
        return $this->post('logistics/epis/fulfillment/upload_awb', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fxspace%2Fcreate
     */
    public function EpisXspaceCreate($params = [])
    {
        return $this->post('logistics/epis/xspace/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fxspace%2Fdetail
     */
    public function EpisXspaceGetDetail($params = [])
    {
        return $this->post('logistics/epis/xspace/detail', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fxspace%2Fquery
     */
    public function EpisXspaceQuery($params = [])
    {
        return $this->get('logistics/epis/xspace/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fxspace%2Frate
     */
    public function EpisXspaceRateTicket($params = [])
    {
        return $this->get('logistics/epis/xspace/rate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fxspace%2Fticket%2Fstatus
     */
    public function EpisXspaceTicketStatusUpdate($params = [])
    {
        return $this->get('logistics/epis/xspace/ticket/status', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Festimate_shipping_fee
     */
    public function EstimateShippingFee($params = [])
    {
        return $this->get('logistics/epis/estimate_shipping_fee', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fepis%2Fget_shipping_fee
     */
    public function GetShippingFee($params = [])
    {
        return $this->get('logistics/epis/get_shipping_fee', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fv2%2Fpublic%2Fintegrations%2Flazada
     */
    public function PickuppAddJobsToManifest($params = [])
    {
        return $this->get('v2/public/integrations/lazada', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpublic%2Fintegrations%2Flazada
     */
    public function PickuppCreateManifest($params = [])
    {
        return $this->get('public/integrations/lazada', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpublic%2Fintegrations%2Flazada%2Fcancel
     */
    public function PickuppRemoveJobFromManifest($params = [])
    {
        return $this->get('public/integrations/lazada/cancel', $params);
    }
}
