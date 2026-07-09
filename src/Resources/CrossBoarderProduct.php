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

class CrossBoarderProduct extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fcreate
     */
    public function CreateGlobalProduct($params = [])
    {
        return $this->post('product/global/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fextension
     */
    public function GetGlobalProductExtension($params = [])
    {
        return $this->get('product/global/extension', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fstatus%2Fget
     */
    public function GetGlobalProductStatus($params = [])
    {
        return $this->get('product/global/status/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fsemi%2Frecommend%2Fprice%2Fget
     */
    public function GetRecommendPrice($params = [])
    {
        return $this->get('product/global/semi/recommend/price/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Funfilled%2Fattribute%2Fget
     */
    public function GetUnfilledAttribute($params = [])
    {
        return $this->get('product/global/unfilled/attribute/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fsemi%2Favaible%2Fget
     */
    public function GetUpgradableGlobalPlusProductList($params = [])
    {
        return $this->get('product/global/semi/avaible/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fsemi%2Fupdate
     */
    public function SemiProductUpdate($params = [])
    {
        return $this->post('product/global/semi/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fsemi%2Fupgrade
     */
    public function SemiProductUpgrade($params = [])
    {
        return $this->get('product/global/semi/upgrade', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fattribute%2Fupdate
     */
    public function UpdateGlobalProductAttribute($params = [])
    {
        return $this->post('product/global/attribute/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fdelete
     */
    public function DeleteMerchantProduct($params = [])
    {
        return $this->post('product/global/delete', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fproduct%2Fglobal%2Fupdate%2Fstatus
     */
    public function UpdateProductStatus($params = [])
    {
        return $this->post('product/global/update/status', $params);
    }
}
