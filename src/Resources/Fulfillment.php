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

class Fulfillment extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fpackage%2Fsof%2Fcollect
     */
    public function ConfirmCollectForDBS($params = [])
    {
        return $this->post('order/package/sof/collect', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fpackage%2Fsof%2Fdelivered
     */
    public function ConfirmDeliveryForDBS($params = [])
    {
        return $this->post('order/package/sof/delivered', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fdigital%2Fdelivered
     */
    public function DeliverDigital($params = [])
    {
        return $this->post('order/digital/delivered', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fpackage%2Fsof%2Ffailed_delivery
     */
    public function FailedDeliveryForDBS($params = [])
    {
        return $this->post('order/package/sof/failed_delivery', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fshipment%2Fproviders%2Fget
     */
    public function GetShipmentProvider($params = [])
    {
        return $this->get('order/shipment/providers/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Ffulfill%2Fpack
     */
    public function Pack($params = [])
    {
        return $this->post('order/fulfill/pack', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fpackage%2Fsof%2Fstatus%2Fupdate
     */
    public function PackageStatusUpdateForDBS($params = [])
    {
        return $this->post('order/package/sof/status/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fpackage%2Fdocument%2Fget
     */
    public function PrintAWB($params = [])
    {
        return $this->get('order/package/document/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fpackage%2Frts
     */
    public function ReadyToShip($params = [])
    {
        return $this->post('order/package/rts', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Fpackage%2Frepack
     */
    public function RecreatePackage($params = [])
    {
        return $this->get('order/package/repack', $params);
    }
}
