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

class LazadaDG extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Finstall%2Fservicecallback
     */
    public function InstallServiceCallBack($params = [])
    {
        return $this->get('digital/install/servicecallback', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Ftest%2Finstall%2Fservicecallback
     */
    public function InstallServiceCallBack2($params = [])
    {
        return $this->get('digital/test/install/servicecallback', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Finstall%2Ftest%2Fservicecallback
     */
    public function InstallServiceCallBackForTest($params = [])
    {
        return $this->get('digital/install/test/servicecallback', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Finsurance%2Fnotification
     */
    public function InuranceNotication($params = [])
    {
        return $this->get('digital/insurance/notification', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Finsurance%2Ftest%2Fnotificationcopy
     */
    public function InuranceNotication2($params = [])
    {
        return $this->get('digital/insurance/test/notificationcopy', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Finsurance%2Fnotificationlapse
     */
    public function InuranceNotifyLapse($params = [])
    {
        return $this->get('digital/insurance/notificationlapse', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Fservice%2FcdkCodeReceived
     */
    public function DigitalServiceCdkCodeReceived($params = [])
    {
        return $this->post('digital/service/cdkCodeReceived', $params);
    }
}
