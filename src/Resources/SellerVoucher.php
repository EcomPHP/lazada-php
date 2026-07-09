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

class SellerVoucher extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvoucher%2Fproduct%2Fsku%2Fremove
     */
    public function SellerVoucheDeleteSelectedProductSKU($params = [])
    {
        return $this->post('promotion/voucher/product/sku/remove', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvoucher%2Factivate
     */
    public function SellerVoucherActivate($params = [])
    {
        return $this->post('promotion/voucher/activate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvoucher%2Fproduct%2Fsku%2Fadd
     */
    public function SellerVoucherAddSelectedProductSKU($params = [])
    {
        return $this->post('promotion/voucher/product/sku/add', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvoucher%2Fcreate
     */
    public function SellerVoucherCreate($params = [])
    {
        return $this->post('promotion/voucher/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvoucher%2Fdeactivate
     */
    public function SellerVoucherDeactivate($params = [])
    {
        return $this->post('promotion/voucher/deactivate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvoucher%2Fget
     */
    public function SellerVoucherDetailQuery($params = [])
    {
        return $this->get('promotion/voucher/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvouchers%2Fget
     */
    public function SellerVoucherList($params = [])
    {
        return $this->get('promotion/vouchers/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvoucher%2Fproducts%2Fget
     */
    public function SellerVoucherSelectedProductList($params = [])
    {
        return $this->get('promotion/voucher/products/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fvoucher%2Fupdate
     */
    public function SellerVoucherUpdate($params = [])
    {
        return $this->post('promotion/voucher/update', $params);
    }
}
