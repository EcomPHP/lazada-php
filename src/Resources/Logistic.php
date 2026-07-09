<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * Copyright (c) 2024 Jin <j@sax.vn> All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\Lazada\Resources;

use EcomPHP\Lazada\Resource;
use GuzzleHttp\RequestOptions;

class Logistic extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Ftps%2Frunsheets%2Fstops
     */
    public function AddOrUpdatePickupStop($data)
    {
        return $this->call('POST', 'logistics/tps/runsheets/stops', [
            RequestOptions::FORM_PARAMS => $data,
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Ftps%2Fstations%2Fcreate
     */
    public function Create3PLStation($data)
    {
        return $this->call('POST', 'logistics/tps/stations/create', [
            RequestOptions::FORM_PARAMS => $data,
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistic%2Forder%2Ftrace
     */
    public function GetOrderTrace($order_id, $extra_params = [])
    {
        $extra_params['order_id'] = $order_id;

        return $this->call('POST', 'logistic/order/trace', [
            RequestOptions::FORM_PARAMS => $extra_params,
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdop%2Fscan
     */
    public function ScanParcel($cageNumber, $trackingNumber)
    {
        return $this->call('POST', 'dop/scan', [
            RequestOptions::FORM_PARAMS => [
                'cageNumber' => $cageNumber,
                'trackingNumber' => $trackingNumber,
            ],
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fstations%2Fdop%2Fscan
     */
    public function StationDopScan($cageNumber, $trackingNumber)
    {
        return $this->call('POST', 'stations/dop/scan', [
            RequestOptions::FORM_PARAMS => [
                'cageNumber' => $cageNumber,
                'trackingNumber' => $trackingNumber,
            ],
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Ftps%2Fstations%2Fupdate
     */
    public function Update3PLStation($data)
    {
        return $this->call('POST', 'logistics/tps/stations/update', [
            RequestOptions::FORM_PARAMS => $data,
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Ftps%2Fsellers%2Fpickup_timeslot
     */
    public function UpdatePickupTimeSlot($sellerId, $warehouseCode, $pickupTimeslots)
    {
        return $this->call('POST', 'logistics/tps/sellers/pickup_timeslot', [
            RequestOptions::FORM_PARAMS => [
                'sellerId' => $sellerId,
                'warehouseCode' => $warehouseCode,
                'pickupTimeslots' => $pickupTimeslots,
            ],
        ]);
    }
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fldp%2FcreateConsolidationService
     */
    public function CreateConsolidationService($params = [])
    {
        return $this->post('logistics/ldp/createConsolidationService', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fldp%2FupdateLastmile
     */
    public function UpdateLastMile($params = [])
    {
        return $this->post('logistics/ldp/updateLastmile', $params);
    }

}
