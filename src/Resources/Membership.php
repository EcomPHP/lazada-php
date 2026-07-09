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

class Membership extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmembership%2Flinkmember%2Fget
     */
    public function GetLinkMember($params = [])
    {
        return $this->get('membership/linkmember/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpartner%2Fget
     */
    public function GetLinkMember2($params = [])
    {
        return $this->get('partner/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmembership%2Flinkmember%2Flist
     */
    public function GetLinkMemberList($params = [])
    {
        return $this->get('membership/linkmember/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpartner%2Flist
     */
    public function GetLinkMemberList2($params = [])
    {
        return $this->get('partner/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fmembership%2Flink
     */
    public function LinkMembership($params = [])
    {
        return $this->post('membership/link', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpartner%2Flink
     */
    public function PartnerLink($params = [])
    {
        return $this->get('partner/link', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpartner%2Ftransaction
     */
    public function PartnerTransaction($params = [])
    {
        return $this->get('partner/transaction', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpartner%2Funlink
     */
    public function PartnerUnlink($params = [])
    {
        return $this->get('partner/unlink', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpartner%2Fupdate
     */
    public function PartnerUpdate($params = [])
    {
        return $this->get('partner/update', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpartner%2FupdatePartnerUserId
     */
    public function UpdatePartnerUserId($params = [])
    {
        return $this->get('partner/updatePartnerUserId', $params);
    }
}
