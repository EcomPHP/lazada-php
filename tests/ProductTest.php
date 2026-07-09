<?php
namespace EcomPHP\Lazada\Tests;

use EcomPHP\Lazada\Client;
use EcomPHP\Lazada\Resources\Product;
use GuzzleHttp\RequestOptions;
use PHPUnit\Framework\TestCase;

class ProductTestClient extends Client
{
    public $calls = array();

    public function call($method, $uri, $params = array(), $wrapDataKey = 'data')
    {
        $this->calls[] = array($method, $uri, $params, $wrapDataKey);

        return end($this->calls);
    }
}

class ProductTest extends TestCase
{
    public function testCreatesRequestsForCurrentProductApis()
    {
        $client = new ProductTestClient('app-key', 'app-secret', 'callback-url');
        $resource = (new Product())->useApiClient($client);
        $params = array('foo' => 'bar');

        $apis = array(
            array($resource->AdjustSellableQuantity($params), 'POST', 'product/stock/sellable/adjust', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->BatchUpdateSizeChart($params), 'POST', 'size/chart/batch/update', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->CreateProduct($params), 'POST', 'product/create', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->DeactivateProduct($params), 'POST', 'product/deactivate', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->GetBrandByPages($params), 'GET', 'category/brands/query', array(RequestOptions::QUERY => $params)),
            array($resource->GetCategoryAttributes($params), 'GET', 'category/attributes/get', array(RequestOptions::QUERY => $params)),
            array($resource->GetCategorySuggestion($params), 'GET', 'product/category/suggestion/get', array(RequestOptions::QUERY => $params)),
            array($resource->GetCategoryTree($params), 'GET', 'category/tree/get', array(RequestOptions::QUERY => $params)),
            array($resource->GetNextCascadeProp($params), 'GET', 'category/cascade/getNextCascadeProp', array(RequestOptions::QUERY => $params)),
            array($resource->GetPreQcRules($params), 'GET', 'product/seller/item/getPreQcRules', array(RequestOptions::QUERY => $params)),
            array($resource->GetProductContentScore($params), 'GET', 'product/content/score/get', array(RequestOptions::QUERY => $params)),
            array($resource->GetProductItem('item-1'), 'GET', 'product/item/get', array(RequestOptions::QUERY => array('item_id' => 'item-1'))),
            array($resource->GetProducts($params), 'GET', 'products/get', array(RequestOptions::QUERY => $params)),
            array($resource->GetQCAlertProducts($params), 'GET', 'product/qc/alert/list', array(RequestOptions::QUERY => $params)),
            array($resource->GetResponse($params), 'GET', 'image/response/get', array(RequestOptions::QUERY => $params)),
            array($resource->GetSellerItemLimit($params), 'GET', 'product/seller/item/limit', array(RequestOptions::QUERY => $params)),
            array($resource->GetSizeChartTemplate($params), 'GET', 'size/chart/template/get', array(RequestOptions::QUERY => $params)),
            array($resource->GetUnfilledAttributeItem($params), 'GET', 'product/unfilled/attribute/get', array(RequestOptions::QUERY => $params)),
            array($resource->MigrateImage($params), 'POST', 'image/migrate', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->MigrateImages($params), 'POST', 'images/migrate', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->ProductCheck($params), 'GET', 'product/pre/check', array(RequestOptions::QUERY => $params)),
            array($resource->RemoveProduct($params), 'POST', 'product/remove', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->RemoveSku($params), 'POST', 'product/sku/remove', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->SetImages($params), 'POST', 'images/set', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->UpdatePriceQuantity($params), 'POST', 'product/price_quantity/update', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->UpdateProduct($params), 'POST', 'product/update', array(RequestOptions::FORM_PARAMS => $params)),
            array($resource->UpdateSellableQuantity($params), 'GET', 'product/stock/sellable/update', array(RequestOptions::QUERY => $params)),
            array($resource->UploadImage($params), 'POST', 'image/upload', array(RequestOptions::FORM_PARAMS => $params)),
        );

        foreach ($apis as $api) {
            $this->assertSame(array($api[1], $api[2], $api[3], 'data'), $api[0]);
        }
    }
}