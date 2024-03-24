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
    public function AddOrUpdatePickupStop($data)
    {
        return $this->call('POST', 'logistics/tps/runsheets/stops', [
            RequestOptions::FORM_PARAMS => $data,
        ]);
    }

    public function Create3PLStation($data)
    {
        return $this->call('POST', 'logistics/tps/stations/create', [
            RequestOptions::FORM_PARAMS => $data,
        ]);
    }

    public function GetOrderTrace($order_id, $extra_params = [])
    {
        $extra_params['order_id'] = $order_id;

        return $this->call('POST', 'logistic/order/trace', [
            RequestOptions::FORM_PARAMS => $extra_params,
        ]);
    }

    public function ScanParcel($cageNumber, $trackingNumber)
    {
        return $this->call('POST', 'dop/scan', [
            RequestOptions::FORM_PARAMS => [
                'cageNumber' => $cageNumber,
                'trackingNumber' => $trackingNumber,
            ],
        ]);
    }

    public function StationDopScan($cageNumber, $trackingNumber)
    {
        return $this->call('POST', 'stations/dop/scan', [
            RequestOptions::FORM_PARAMS => [
                'cageNumber' => $cageNumber,
                'trackingNumber' => $trackingNumber,
            ],
        ]);
    }

    public function Update3PLStation($data)
    {
        return $this->call('POST', 'logistics/tps/stations/update', [
            RequestOptions::FORM_PARAMS => $data,
        ]);
    }

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
}
