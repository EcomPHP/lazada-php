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

class ServiceMarket extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fservice%2Fmarket%2Forder%2Fquery
     */
    public function ServiceMarketAppKeyOrderQuery($params = [])
    {
        return $this->get('service/market/order/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fservice%2Fmarket%2Fsubs%2Fquery
     */
    public function ServiceMarketAppKeySubQuery($params = [])
    {
        return $this->get('service/market/subs/query', $params);
    }
}
