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

class FreeShipping extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Factivate
     */
    public function FreeShippingActivate($params = [])
    {
        return $this->post('promotion/freeshipping/activate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fproduct%2Fsku%2Fadd
     */
    public function FreeShippingAddSelectedProductSKU($params = [])
    {
        return $this->post('promotion/freeshipping/product/sku/add', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fcreate
     */
    public function FreeShippingCreate($params = [])
    {
        return $this->post('promotion/freeshipping/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fdeactivate
     */
    public function FreeShippingDeactivate($params = [])
    {
        return $this->post('promotion/freeshipping/deactivate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fproduct%2Fsku%2Fremove
     */
    public function FreeShippingDeleteSelectedProductSKU($params = [])
    {
        return $this->post('promotion/freeshipping/product/sku/remove', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fdeliveryoptions%2Fget
     */
    public function FreeShippingDeliveryOptionsQuery($params = [])
    {
        return $this->get('promotion/freeshipping/deliveryoptions/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fget
     */
    public function FreeShippingGet($params = [])
    {
        return $this->get('promotion/freeshipping/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshippings%2Fget
     */
    public function FreeShippingList($params = [])
    {
        return $this->get('promotion/freeshippings/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fregions%2Fget
     */
    public function FreeShippingRegionsQuery($params = [])
    {
        return $this->get('promotion/freeshipping/regions/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fproducts%2Fget
     */
    public function FreeShippingSelectedProductList($params = [])
    {
        return $this->get('promotion/freeshipping/products/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Ffreeshipping%2Fupdate
     */
    public function FreeShippingUpdate($params = [])
    {
        return $this->post('promotion/freeshipping/update', $params);
    }
}
