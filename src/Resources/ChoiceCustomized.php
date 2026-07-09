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

class ChoiceCustomized extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fjit%2Fpurchase_order%2Fbatch_pickup_deliver
     */
    public function BatchDeliverJitPurchaseOrder($params = [])
    {
        return $this->get('jit/purchase_order/batch_pickup_deliver', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fchoice%2Fstock%2Fedit
     */
    public function EditChoiceSkuStock($params = [])
    {
        return $this->post('choice/stock/edit', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fchoice%2Fproduct%2Fitem%2Fget
     */
    public function GetChoiceProductItem($params = [])
    {
        return $this->get('choice/product/item/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fchoice%2Fproducts%2Fget
     */
    public function GetChoiceProducts($params = [])
    {
        return $this->get('choice/products/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fchoice%2Fseller%2Fget
     */
    public function GetChoiceSeller($params = [])
    {
        return $this->get('choice/seller/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fchoice%2Fsku_item_relation%2Fget_by_sku
     */
    public function GetChoiceSkuItemRelationBySku($params = [])
    {
        return $this->get('choice/sku_item_relation/get_by_sku', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fjit%2Fpurchase_order%2Fpackage
     */
    public function PackageJitPurchaseOrder($params = [])
    {
        return $this->post('jit/purchase_order/package', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fjit%2Fpurchase_order%2Fprint
     */
    public function PrintJitPurchaseOrderAndItem($params = [])
    {
        return $this->get('jit/purchase_order/print', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpickup_order%2Fprint
     */
    public function PrintPickuoOrder($params = [])
    {
        return $this->get('pickup_order/print', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fjit%2Fpurchase_order%2Fquery_list
     */
    public function QueryListJitPurchaseOrder($params = [])
    {
        return $this->get('jit/purchase_order/query_list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fjit%2Fpurchase_order%2Fquery_list_purchase_item
     */
    public function QueryListPurchaseItem($params = [])
    {
        return $this->get('jit/purchase_order/query_list_purchase_item', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpickup_order%2Fquery
     */
    public function QueryPickupOrder($params = [])
    {
        return $this->get('pickup_order/query', $params);
    }
}
