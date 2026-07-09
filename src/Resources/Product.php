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

use GuzzleHttp\RequestOptions;
use EcomPHP\Lazada\Resource;

class Product extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fstock%2Fsellable%2Fadjust
     */
    public function AdjustSellableQuantity($params = [])
    {
        return $this->post('product/stock/sellable/adjust', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsize%2Fchart%2Fbatch%2Fupdate
     */
    public function BatchUpdateSizeChart($params = [])
    {
        return $this->post('size/chart/batch/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fcreate
     */
    public function CreateProduct($params = [])
    {
        return $this->post('product/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fdeactivate
     */
    public function DeactivateProduct($params = [])
    {
        return $this->post('product/deactivate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcategory%2Fbrands%2Fquery
     */
    public function GetBrandByPages($params = [])
    {
        return $this->get('category/brands/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcategory%2Fattributes%2Fget
     */
    public function GetCategoryAttributes($params = [])
    {
        return $this->get('category/attributes/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fcategory%2Fsuggestion%2Fget
     */
    public function GetCategorySuggestion($params = [])
    {
        return $this->get('product/category/suggestion/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcategory%2Ftree%2Fget
     */
    public function GetCategoryTree($params = [])
    {
        return $this->get('category/tree/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcategory%2Fcascade%2FgetNextCascadeProp
     */
    public function GetNextCascadeProp($params = [])
    {
        return $this->get('category/cascade/getNextCascadeProp', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fseller%2Fitem%2FgetPreQcRules
     */
    public function GetPreQcRules($params = [])
    {
        return $this->get('product/seller/item/getPreQcRules', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fcontent%2Fscore%2Fget
     */
    public function GetProductContentScore($params = [])
    {
        return $this->get('product/content/score/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fitem%2Fget
     */
    public function GetProductItem($item_id = null)
    {
        return $this->call('GET', 'product/item/get', [
            RequestOptions::QUERY => [
                'item_id' => $item_id,
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproducts%2Fget
     */
    public function GetProducts($params = [])
    {
        return $this->get('products/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fqc%2Falert%2Flist
     */
    public function GetQCAlertProducts($params = [])
    {
        return $this->get('product/qc/alert/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fimage%2Fresponse%2Fget
     */
    public function GetResponse($params = [])
    {
        return $this->get('image/response/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fseller%2Fitem%2Flimit
     */
    public function GetSellerItemLimit($params = [])
    {
        return $this->get('product/seller/item/limit', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsize%2Fchart%2Ftemplate%2Fget
     */
    public function GetSizeChartTemplate($params = [])
    {
        return $this->get('size/chart/template/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Funfilled%2Fattribute%2Fget
     */
    public function GetUnfilledAttributeItem($params = [])
    {
        return $this->get('product/unfilled/attribute/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fimage%2Fmigrate
     */
    public function MigrateImage($params = [])
    {
        return $this->post('image/migrate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fimages%2Fmigrate
     */
    public function MigrateImages($params = [])
    {
        return $this->post('images/migrate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fpre%2Fcheck
     */
    public function ProductCheck($params = [])
    {
        return $this->get('product/pre/check', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fremove
     */
    public function RemoveProduct($params = [])
    {
        return $this->post('product/remove', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fsku%2Fremove
     */
    public function RemoveSku($params = [])
    {
        return $this->post('product/sku/remove', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fimages%2Fset
     */
    public function SetImages($params = [])
    {
        return $this->post('images/set', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fprice_quantity%2Fupdate
     */
    public function UpdatePriceQuantity($params = [])
    {
        return $this->post('product/price_quantity/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fupdate
     */
    public function UpdateProduct($params = [])
    {
        return $this->post('product/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fstock%2Fsellable%2Fupdate
     */
    public function UpdateSellableQuantity($params = [])
    {
        return $this->get('product/stock/sellable/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fimage%2Fupload
     */
    public function UploadImage($params = [])
    {
        return $this->post('image/upload', $params);
    }
}
