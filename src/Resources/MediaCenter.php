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

class MediaCenter extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmedia%2Fvideo%2Fblock%2Fcommit
     */
    public function CompleteCreateVideo($params = [])
    {
        return $this->post('media/video/block/commit', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmedia%2Fvideo%2Fget
     */
    public function GetVideo($params = [])
    {
        return $this->get('media/video/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmedia%2Fvideo%2Fquota%2Fget
     */
    public function GetVideoQuota($params = [])
    {
        return $this->get('media/video/quota/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmedia%2Fvideo%2Fblock%2Fcreate
     */
    public function InitCreateVideo($params = [])
    {
        return $this->post('media/video/block/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmedia%2Fvideo%2Fremove
     */
    public function RemoveVideo($params = [])
    {
        return $this->post('media/video/remove', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmedia%2Fvideo%2Fblock%2Fupload
     */
    public function UploadVideoBlock($params = [])
    {
        return $this->post('media/video/block/upload', $params);
    }
}
