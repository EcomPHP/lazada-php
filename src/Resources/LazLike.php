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

class LazLike extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fcontent%2FqueryTagInfosByName
     */
    public function MCNQueryTagInfoByName($params = [])
    {
        return $this->get('content/mcn/content/queryTagInfosByName', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fcontent%2FcancelScheduled
     */
    public function McnContentCancelSchedulePublish($params = [])
    {
        return $this->post('content/mcn/content/cancelScheduled', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fvideo%2Fblock%2Fcommit
     */
    public function McnContentCompleteCreateVideo($params = [])
    {
        return $this->post('content/mcn/video/block/commit', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fcontent%2Fcreate
     */
    public function McnContentCreate($params = [])
    {
        return $this->post('content/mcn/content/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fvideo%2Fblock%2Fcreate
     */
    public function McnContentInitCreateVideo($params = [])
    {
        return $this->get('content/mcn/video/block/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fcategory%2Flist
     */
    public function McnContentListCategory($params = [])
    {
        return $this->get('content/mcn/category/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fproperty%2Flist
     */
    public function McnContentPropertyTagList($params = [])
    {
        return $this->get('content/mcn/property/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fcontent%2FreplySchedulePublish
     */
    public function McnContentReplySchedulePublish($params = [])
    {
        return $this->post('content/mcn/content/replySchedulePublish', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fimage%2Fupload
     */
    public function McnContentUploadImage($params = [])
    {
        return $this->post('content/mcn/image/upload', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fvideo%2Fblock%2Fupload
     */
    public function McnContentUploadVideoBlock($params = [])
    {
        return $this->post('content/mcn/video/block/upload', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fproduct%2Fvalidate
     */
    public function McnProductValidator($params = [])
    {
        return $this->get('content/mcn/product/validate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fsimilar%2Fproduct%2Fsearch
     */
    public function McnSimilarProductSearch($params = [])
    {
        return $this->get('content/mcn/similar/product/search', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fmcn%2Fcontent%2FqueryReviewRecords
     */
    public function QueryContentReviewRecords($params = [])
    {
        return $this->get('content/mcn/content/queryReviewRecords', $params);
    }
}
