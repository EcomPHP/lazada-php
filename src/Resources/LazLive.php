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

class LazLive extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flazlive%2Fproduct%2Fhighlight
     */
    public function HighlightProduct($params = [])
    {
        return $this->get('lazlive/product/highlight', $params);
    }
}
