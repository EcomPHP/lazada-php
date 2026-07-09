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

class FirstMileBigbagOnlyForCN extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcngfc%2Ffulfill%2Fgetchannelcode
     */
    public function GetChannelcodeByFirstMileNo($params = [])
    {
        return $this->get('logistics/cngfc/fulfill/getchannelcode', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcnpms%2Fbigbag%2Flable%2FgetPdf
     */
    public function GetLazadaBigbagPDFLable($params = [])
    {
        return $this->get('logistics/cnpms/bigbag/lable/getPdf', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcnpms%2Fbigbag%2Fcancel
     */
    public function LazadaBigbagCancel($params = [])
    {
        return $this->get('logistics/cnpms/bigbag/cancel', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcnpms%2Fbigbag%2Fquerycollection
     */
    public function LazadaBigbagCollectionPoints($params = [])
    {
        return $this->get('logistics/cnpms/bigbag/querycollection', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcnpms%2Fbigbag%2Fcommit
     */
    public function LazadaBigbagCommit($params = [])
    {
        return $this->get('logistics/cnpms/bigbag/commit', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcnpms%2Fbigbag%2Fupdate
     */
    public function LazadaBigbagUpdate($params = [])
    {
        return $this->get('logistics/cnpms/bigbag/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcnpms%2Faccount%2Fbind
     */
    public function LazadaSellerAccountBind($params = [])
    {
        return $this->get('logistics/cnpms/account/bind', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcnpms%2Faddress%2Fquery
     */
    public function QueryAddressInformaiton($params = [])
    {
        return $this->get('logistics/cnpms/address/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flogistics%2Fcnpms%2Fbigbag%2Fquery
     */
    public function QueryLazadaBigbagInfo($params = [])
    {
        return $this->get('logistics/cnpms/bigbag/query', $params);
    }
}
