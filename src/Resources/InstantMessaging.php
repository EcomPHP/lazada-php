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

class InstantMessaging extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fim%2Fmessage%2Flist
     */
    public function GetMessages($params = [])
    {
        return $this->get('im/message/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fim%2Fsession%2Fget
     */
    public function GetSessionDetail($params = [])
    {
        return $this->get('im/session/get', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fim%2Fsession%2Flist
     */
    public function GetSessionList($params = [])
    {
        return $this->get('im/session/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fim%2Fmessage%2Frecall
     */
    public function MessageRecall($params = [])
    {
        return $this->get('im/message/recall', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fim%2Fsession%2Fopen
     */
    public function OpenSession($params = [])
    {
        return $this->get('im/session/open', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fim%2Fsession%2Fread
     */
    public function ReadSession($params = [])
    {
        return $this->post('im/session/read', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fim%2Fmessage%2Fsend
     */
    public function SendMessage($params = [])
    {
        return $this->post('im/message/send', $params);
    }
}
