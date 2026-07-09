<?php
namespace EcomPHP\Lazada\Tests;

use EcomPHP\Lazada\Client;
use EcomPHP\Lazada\Resources\System;
use GuzzleHttp\RequestOptions;
use PHPUnit\Framework\TestCase;

class SystemTestClient extends Client
{
    public $calls = array();

    public function call($method, $uri, $params = array(), $wrapDataKey = 'data')
    {
        $this->calls[] = array($method, $uri, $params, $wrapDataKey);

        return end($this->calls);
    }
}

class SystemTest extends TestCase
{
    public function testCreatesRequestsForCurrentSystemApis()
    {
        $client = new SystemTestClient('app-key', 'app-secret', 'callback-url');
        $resource = (new System())->useApiClient($client);

        $exportParams = array(
            'appName' => 'app',
            'secret' => 'secret',
            'workId' => 'work-1',
            'datasetId' => 'dataset-1',
            'fileType' => 'csv',
            'uploadType' => 'oss',
        );

        $apis = array(
            array($resource->GenerateAccessToken('auth-code'), 'GET', 'auth/token/create', array(RequestOptions::QUERY => array(
                'code' => 'auth-code',
                'access_token' => '',
            ))),
            array($resource->GenerateAccessTokenWithOpenId('auth-code'), 'GET', 'auth/token/createWithOpenId', array(RequestOptions::QUERY => array(
                'code' => 'auth-code',
                'access_token' => '',
            ))),
            array($resource->RefreshAccessToken('refresh-token'), 'GET', 'auth/token/refresh', array(RequestOptions::QUERY => array(
                'refresh_token' => 'refresh-token',
                'access_token' => '',
            ))),
            array($resource->startExportByDataset($exportParams), 'GET', 'fbi/download/startExportByDataset', array(RequestOptions::QUERY => array_merge($exportParams, array(
                'access_token' => '',
            )))),
        );

        foreach ($apis as $api) {
            $this->assertSame(array($api[1], $api[2], $api[3], 'data'), $api[0]);
        }
    }
}