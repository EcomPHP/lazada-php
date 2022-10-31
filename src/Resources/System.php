<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NVuln\Lazada\Resources;

use GuzzleHttp\RequestOptions;
use NVuln\Lazada\Resource;

class System extends Resource
{
    protected $authorization_required = false;

    /**
     * @inheritDoc
     */
    protected function getApiEndpoint()
    {
        return 'https://auth.lazada.com/rest';
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fauth%2Ftoken%2Fcreate
     */
    public function GenerateAccessToken($auth_code)
    {
        return $this->call('GET', 'auth/token/create', [
            RequestOptions::QUERY => [
                'code' => $auth_code
            ],
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fauth%2Ftoken%2Frefresh
     */
    public function RefreshAccessToken($refresh_token)
    {
        return $this->call('GET', 'auth/token/refresh', [
            RequestOptions::QUERY => [
               'refresh_token' => $refresh_token
            ],
        ]);
    }
}
