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

class EarlyBirdPrice extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Factivity%2Fearly%2Fbird%2Fcreate%2Fv2
     */
    public function CreateEarlyBirdActivityV2($params = [])
    {
        return $this->post('activity/early/bird/create/v2', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Factivity%2Fearly%2Fbird%2FaddSkus%2Fv2
     */
    public function EarlyBirdActivityAddSkusV2($params = [])
    {
        return $this->post('activity/early/bird/addSkus/v2', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Factivity%2Fearly%2Fbird%2FdeactivateSkus%2Fv2
     */
    public function EarlyBirdActivityDeactivateSkusV2($params = [])
    {
        return $this->post('activity/early/bird/deactivateSkus/v2', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Factivity%2Fearly%2Fbird%2FisWhitelistSeller
     */
    public function EarlyBirdActivityIsWhitelistSeller($params = [])
    {
        return $this->post('activity/early/bird/isWhitelistSeller', $params);
    }
}
