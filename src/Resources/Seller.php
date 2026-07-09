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

class Seller extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fshop%2Ffollow%2Fstatus%2Fbatch%2Fquery
     */
    public function BatchQueryFollowStatus($params = [])
    {
        return $this->get('shop/follow/status/batch/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frc%2Fstore%2Flist%2Fget
     */
    public function GetPickUpStoreList($params = [])
    {
        return $this->get('rc/store/list/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fget
     */
    public function GetSeller($params = [])
    {
        return $this->get('seller/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fmetrics%2Fget
     */
    public function GetSellerMetricsById($params = [])
    {
        return $this->get('seller/metrics/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fperformance%2Fget
     */
    public function GetSellerPerformance($params = [])
    {
        return $this->get('seller/performance/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frc%2Fwarehouse%2Fget
     */
    public function GetWarehouseBySellerId($params = [])
    {
        return $this->get('rc/warehouse/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frc%2Fwarehouse%2Fdetail%2Fget
     */
    public function QueryWarehouseDetailInfoBySellerId($params = [])
    {
        return $this->get('rc/warehouse/detail/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsellercenter%2Fmsg%2Flist
     */
    public function SellerCenterMsgList($params = [])
    {
        return $this->get('sellercenter/msg/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fpolicy%2Ffetch
     */
    public function SellerPolicyFetch($params = [])
    {
        return $this->get('seller/policy/fetch', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Far%2Fconfig%2Fsyn
     */
    public function SynchronizeSellerItemArConfig($params = [])
    {
        return $this->get('seller/ar/config/syn', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fcb%2Fcountry%2Fget
     */
    public function GetCountryInfo($params = [])
    {
        return $this->get('seller/cb/country/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fcb%2Fregister%2Finfo
     */
    public function GetSellerRegisterInfo($params = [])
    {
        return $this->get('seller/cb/register/info', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fcb%2Fcountry%2Flocation%2Fget
     */
    public function GetSubAddress($params = [])
    {
        return $this->get('seller/cb/country/location/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fcb%2Fpayment%2Fconfig
     */
    public function PaymentBinding($params = [])
    {
        return $this->get('seller/cb/payment/config', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fhunting%2Fbuybox%2Fget
     */
    public function QueryBuyboxHuntingInfo($params = [])
    {
        return $this->get('hunting/buybox/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frc%2FsellerWarehouse%2FsaveWarehouseInfo
     */
    public function SaveSellerWarehouseInfo($params = [])
    {
        return $this->get('rc/sellerWarehouse/saveWarehouseInfo', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fseller%2Fcb%2Fregister%2Ffieldcheck
     */
    public function SellerFieldVerify($params = [])
    {
        return $this->get('seller/cb/register/fieldcheck', $params);
    }
}
