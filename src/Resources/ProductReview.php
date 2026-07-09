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

class ProductReview extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Freview%2Fseller%2Fhistory%2Flist
     */
    public function GetHistoryReviewIdList($params = [])
    {
        return $this->get('review/seller/history/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Freview%2Fseller%2Flist%2Fv2
     */
    public function GetReviewListByIdList($params = [])
    {
        return $this->get('review/seller/list/v2', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Freview%2Fseller%2Freply%2Fadd
     */
    public function SubmitSellerReply($params = [])
    {
        return $this->get('review/seller/reply/add', $params);
    }
}
