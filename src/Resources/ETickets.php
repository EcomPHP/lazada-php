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

class ETickets extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Feticket%2Fcode%2Fquery
     */
    public function GetOrderItemsFromBarCode($params = [])
    {
        return $this->get('eticket/code/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Feticket%2Fma%2Favailable
     */
    public function GlobalEticketMerchantMaAvailable($params = [])
    {
        return $this->get('eticket/ma/available', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Feticket%2Fma%2Fconsume
     */
    public function GlobalEticketMerchantMaConsume($params = [])
    {
        return $this->post('eticket/ma/consume', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Feticket%2Fma%2Ffailsend
     */
    public function GlobalEticketMerchantMaFailsend($params = [])
    {
        return $this->post('eticket/ma/failsend', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Feticket%2Fma%2Fquery
     */
    public function GlobalEticketMerchantMaQuery($params = [])
    {
        return $this->get('eticket/ma/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Feticket%2Fma%2FqueryTbMa
     */
    public function GlobalEticketMerchantMaQueryTbMa($params = [])
    {
        return $this->get('eticket/ma/queryTbMa', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Feticket%2Fma%2Fsend
     */
    public function GlobalEticketMerchantMaSend($params = [])
    {
        return $this->get('eticket/ma/send', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Feticket%2Fcode%2Fconsume
     */
    public function RedeemOrderItems($params = [])
    {
        return $this->get('eticket/code/consume', $params);
    }
}
