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

class LogisticsStation extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fcages%2Fvalidate
     */
    public function CageValidation($params = [])
    {
        return $this->post('logistics/station/cages/validate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fconfirm-inbound
     */
    public function ConfirmInbound($params = [])
    {
        return $this->post('logistics/station/v1/confirm-inbound', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fcp%2Fconfirm-parcel-collection
     */
    public function ConfirmParcelCollection($params = [])
    {
        return $this->post('logistics/station/v1/cp/confirm-parcel-collection', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fscanned-parcels%2Fcreate
     */
    public function CreateScannedParcel($params = [])
    {
        return $this->post('logistics/station/v1/scanned-parcels/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fscanned-parcels%2Fdelete
     */
    public function DeleteScannedParcel($params = [])
    {
        return $this->post('logistics/station/v1/scanned-parcels/delete', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fdop%2Fconfirm-inbound
     */
    public function DopConfirmInbound($params = [])
    {
        return $this->post('logistics/station/dop/confirm-inbound', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fdop%2Fscanned-parcels
     */
    public function DopCreateScannedParcel($params = [])
    {
        return $this->post('logistics/station/dop/scanned-parcels', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fdop%2Fscanned-parcels%2Fdelete
     */
    public function DopDeleteScannedParcel($params = [])
    {
        return $this->post('logistics/station/dop/scanned-parcels/delete', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fdop%2Finbounded-parcels%2Flist
     */
    public function DopGetInboundedParcel($params = [])
    {
        return $this->get('logistics/station/dop/inbounded-parcels/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fdop%2Fscanned-parcels%2Flist
     */
    public function DopGetScannedParcel($params = [])
    {
        return $this->get('logistics/station/dop/scanned-parcels/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fcp%2Fscheduled-pu-parcels%2Flist
     */
    public function GetCpScheduledPuParcel($params = [])
    {
        return $this->get('logistics/station/v1/cp/scheduled-pu-parcels/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Finbounded-parcels%2Flist
     */
    public function GetInboundedParcel($params = [])
    {
        return $this->get('logistics/station/v1/inbounded-parcels/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Flist
     */
    public function GetListAccessStation($params = [])
    {
        return $this->get('logistics/station/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fmetadata
     */
    public function GetMetaData($params = [])
    {
        return $this->get('logistics/station/v1/metadata', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fscanned-parcels%2Flist
     */
    public function GetScannedParcel($params = [])
    {
        return $this->get('logistics/station/v1/scanned-parcels/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fdop%2Fcr-parcels%2Fsearch
     */
    public function SearchCustomerReturnParcel($params = [])
    {
        return $this->get('logistics/station/v1/dop/cr-parcels/search', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fcages%2Fvalidate
     */
    public function ValidateCage($params = [])
    {
        return $this->post('logistics/station/v1/cages/validate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fstation%2Fv1%2Fcp%2Fvalidate-otp
     */
    public function ValidateOTP($params = [])
    {
        return $this->post('logistics/station/v1/cp/validate-otp', $params);
    }
}
