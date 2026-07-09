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

class StoreDecoration extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fstore%2Fcustom%2Fpage%2Fget
     */
    public function GetStoreCustomPage($params = [])
    {
        return $this->get('store/custom/page/get', $params);
    }
}
