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

class Content extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fai%2FcancelTask
     */
    public function CancelTask($params = [])
    {
        return $this->post('content/ai/cancelTask', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fai%2FchangeFace
     */
    public function ChangeFace($params = [])
    {
        return $this->post('content/ai/changeFace', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fai%2FchangeProductBackground
     */
    public function ChangeProductBackground($params = [])
    {
        return $this->post('content/ai/changeProductBackground', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fai%2FfixHand
     */
    public function FixHand($params = [])
    {
        return $this->post('content/ai/fixHand', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fai%2FgetTaskStatus
     */
    public function GetTaskStatus($params = [])
    {
        return $this->get('content/ai/getTaskStatus', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fai%2FproductImageMatch
     */
    public function ProductImageMatch($params = [])
    {
        return $this->get('content/ai/productImageMatch', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fcontent%2Fai%2FtryOnCloth
     */
    public function TryOnCloth($params = [])
    {
        return $this->post('content/ai/tryOnCloth', $params);
    }
}
