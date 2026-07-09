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

class ReturnAndRefund extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Freverse%2Freturn%2Fdetail%2Flist
     */
    public function GetReverseOrderDetail($params = [])
    {
        return $this->get('order/reverse/return/detail/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Freverse%2Freturn%2Fhistory%2Flist
     */
    public function GetReverseOrderHistoryList($params = [])
    {
        return $this->get('order/reverse/return/history/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Freverse%2Freason%2Flist
     */
    public function GetReverseOrderReasonList($params = [])
    {
        return $this->get('order/reverse/reason/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Freverse%2Fgetreverseordersforseller
     */
    public function GetReverseOrdersForSeller($params = [])
    {
        return $this->get('reverse/getreverseordersforseller', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Freverse%2Fcancel%2Fcreate
     */
    public function InitReverseOrderCancel($params = [])
    {
        return $this->get('order/reverse/cancel/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Freverse%2Fcancel%2Fseller%2Fdecide
     */
    public function InitReverseOrderCancelDecide($params = [])
    {
        return $this->get('order/reverse/cancel/seller/decide', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Freverse%2Fonlyrefund%2Fseller%2Fdecide
     */
    public function ReverseOrderOnlyRefundDecide($params = [])
    {
        return $this->get('order/reverse/onlyrefund/seller/decide', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Forder%2Freverse%2Freturn%2Fupdate
     */
    public function ReverseOrderReturnUpdate($params = [])
    {
        return $this->get('order/reverse/return/update', $params);
    }
}
