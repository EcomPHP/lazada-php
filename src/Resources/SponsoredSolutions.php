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

class SponsoredSolutions extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fadgroup%2FaddAdgroupBatch
     */
    public function AddAdgroupBatch($params = [])
    {
        return $this->get('sponsor/solutions/adgroup/addAdgroupBatch', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2FaddSolution
     */
    public function AddSolution($params = [])
    {
        return $this->post('sponsor/solutions/addSolution', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fgproject%2Fads%2Faidc%2Fclick
     */
    public function Clickserver($params = [])
    {
        return $this->get('gproject/ads/aidc/click', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fadgroup%2FdeleteAdgroupBatch
     */
    public function DeleteAdgroupBatch($params = [])
    {
        return $this->get('sponsor/solutions/adgroup/deleteAdgroupBatch', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fcampaign%2FdeleteCampaign
     */
    public function DeleteCampaign($params = [])
    {
        return $this->get('sponsor/solutions/campaign/deleteCampaign', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Faccount%2FgetAccountSignInfo
     */
    public function GetAccountSignInfo($params = [])
    {
        return $this->get('sponsor/solutions/account/getAccountSignInfo', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fwallet%2FgetAutoTopUpOptionOneConfig
     */
    public function GetAutoTopUpOptionOneConfig($params = [])
    {
        return $this->get('sponsor/solutions/wallet/getAutoTopUpOptionOneConfig', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fcampaign%2FgetCampaign
     */
    public function GetCampaign($params = [])
    {
        return $this->get('sponsor/solutions/campaign/getCampaign', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fcampaign%2FgetCampaignCount
     */
    public function GetCampaignCount($params = [])
    {
        return $this->get('sponsor/solutions/campaign/getCampaignCount', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Freport%2FgetDiscoveryReportAdgroup
     */
    public function GetDiscoveryReportAdgroup($params = [])
    {
        return $this->get('sponsor/solutions/report/getDiscoveryReportAdgroup', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Freport%2FgetDiscoveryReportAudience
     */
    public function GetDiscoveryReportAudience($params = [])
    {
        return $this->get('sponsor/solutions/report/getDiscoveryReportAudience', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Freport%2FgetDiscoveryReportCampaign
     */
    public function GetDiscoveryReportCampaign($params = [])
    {
        return $this->get('sponsor/solutions/report/getDiscoveryReportCampaign', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Freport%2FgetDiscoveryReportKeyword
     */
    public function GetDiscoveryReportKeyword($params = [])
    {
        return $this->get('sponsor/solutions/report/getDiscoveryReportKeyword', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Faccount%2FgetLatestSignInfo
     */
    public function GetLatestSignInfo($params = [])
    {
        return $this->get('sponsor/solutions/account/getLatestSignInfo', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Freport%2FgetReportCampaignOnPrePlacement
     */
    public function GetReportCampaignOnFIrstSlot($params = [])
    {
        return $this->get('sponsor/solutions/report/getReportCampaignOnPrePlacement', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Freport%2FgetReportOverview
     */
    public function GetReportOverview($params = [])
    {
        return $this->get('sponsor/solutions/report/getReportOverview', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Freport%2FgetReportOverviewMetric
     */
    public function GetReportOverviewMetric($params = [])
    {
        return $this->get('sponsor/solutions/report/getReportOverviewMetric', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fcategory%2FlistCategory
     */
    public function ListCategory($params = [])
    {
        return $this->get('sponsor/solutions/category/listCategory', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fkeyword%2FlistKeywordByAdgroup
     */
    public function ListKeywordByAdgroup($params = [])
    {
        return $this->get('sponsor/solutions/keyword/listKeywordByAdgroup', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fkeyword%2FlistKeywordByItem
     */
    public function ListKeywordByItem($params = [])
    {
        return $this->get('sponsor/solutions/keyword/listKeywordByItem', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fwallet%2FmodifyAutoTopUpOptionOneConfig
     */
    public function ModifyAutoTopUpOptionOneConfig($params = [])
    {
        return $this->get('sponsor/solutions/wallet/modifyAutoTopUpOptionOneConfig', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fadgroup%2FsearchAdgroupList
     */
    public function SearchAdgroupList($params = [])
    {
        return $this->get('sponsor/solutions/adgroup/searchAdgroupList', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fcampaign%2FsearchCampaignList
     */
    public function SearchCampaignList($params = [])
    {
        return $this->get('sponsor/solutions/campaign/searchCampaignList', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fkeyword%2FsearchKeyword
     */
    public function SearchKeyword($params = [])
    {
        return $this->get('sponsor/solutions/keyword/searchKeyword', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fproduct%2FsearchProductWithPage
     */
    public function SearchProductWithPage($params = [])
    {
        return $this->get('sponsor/solutions/product/searchProductWithPage', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Faccount%2Fsign
     */
    public function Sign($params = [])
    {
        return $this->get('sponsor/solutions/account/sign', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fadgroup%2FupdateAdgroupBatch
     */
    public function UpdateAdgroupBatch($params = [])
    {
        return $this->get('sponsor/solutions/adgroup/updateAdgroupBatch', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fsponsor%2Fsolutions%2Fcampaign%2FupdateCampaign
     */
    public function UpdateCampaign($params = [])
    {
        return $this->get('sponsor/solutions/campaign/updateCampaign', $params);
    }
}
