<?php
namespace EcomPHP\Lazada\Tests;

use EcomPHP\Lazada\Client;
use EcomPHP\Lazada\Resources\Logistic;
use GuzzleHttp\RequestOptions;
use PHPUnit\Framework\TestCase;

class LogisticTestClient extends Client
{
    public $calls = array();

    public function call($method, $uri, $params = array(), $wrapDataKey = 'data')
    {
        $this->calls[] = array($method, $uri, $params, $wrapDataKey);

        return end($this->calls);
    }
}

class LogisticTest extends TestCase
{
    public function testCreatesRequestsForCurrentLogisticApis()
    {
        $client = new LogisticTestClient('app-key', 'app-secret', 'callback-url');
        $resource = (new Logistic())->useApiClient($client);

        $pickupStop = array('stopId' => '1');
        $station = array('stationCode' => 'station-1');
        $pickupTimeslots = array(array('startTime' => '09:00', 'endTime' => '10:00'));

        $apis = array(
            array($resource->AddOrUpdatePickupStop($pickupStop), 'POST', 'logistics/tps/runsheets/stops', array(RequestOptions::FORM_PARAMS => $pickupStop)),
            array($resource->Create3PLStation($station), 'POST', 'logistics/tps/stations/create', array(RequestOptions::FORM_PARAMS => $station)),
            array($resource->GetOrderTrace('1', array('locale' => 'en_US')), 'POST', 'logistic/order/trace', array(RequestOptions::FORM_PARAMS => array(
                'locale' => 'en_US',
                'order_id' => '1',
            ))),
            array($resource->ScanParcel('cage-1', 'track-1'), 'POST', 'dop/scan', array(RequestOptions::FORM_PARAMS => array(
                'cageNumber' => 'cage-1',
                'trackingNumber' => 'track-1',
            ))),
            array($resource->StationDopScan('cage-1', 'track-1'), 'POST', 'stations/dop/scan', array(RequestOptions::FORM_PARAMS => array(
                'cageNumber' => 'cage-1',
                'trackingNumber' => 'track-1',
            ))),
            array($resource->Update3PLStation($station), 'POST', 'logistics/tps/stations/update', array(RequestOptions::FORM_PARAMS => $station)),
            array($resource->UpdatePickupTimeSlot('seller-1', 'warehouse-1', $pickupTimeslots), 'POST', 'logistics/tps/sellers/pickup_timeslot', array(RequestOptions::FORM_PARAMS => array(
                'sellerId' => 'seller-1',
                'warehouseCode' => 'warehouse-1',
                'pickupTimeslots' => $pickupTimeslots,
            ))),
        );

        foreach ($apis as $api) {
            $this->assertSame(array($api[1], $api[2], $api[3], 'data'), $api[0]);
        }
    }
}
