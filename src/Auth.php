<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\Lazada;

use EcomPHP\Lazada\Errors\LazadaException;

class Auth
{
    /**
     * @var \EcomPHP\Lazada\Resources\System
     */
    protected $systemApi;

    /**
     * @var \EcomPHP\Lazada\Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->systemApi = $client->System;
        $this->client = $client;
    }

    /**
     * exchange authorization code for access token
     *
     * @param  null  $code
     * @throws \Exception
     * @return mixed
     */
    public function getToken($code = null)
    {
        $code = $code ?? $_GET['code'] ?? null;
        if (is_null($code)) {
            throw new LazadaException("Authorization code is required.");
        }

        return $this->systemApi->GenerateAccessToken($code);
    }

    public function refreshNewToken($refreshToken)
    {
        return $this->systemApi->RefreshAccessToken($refreshToken);
    }

    /**
     * @param  null  $state
     * @return string|void
     */
    public function createAuthRequest($state = null, $country = null, $return = false)
    {
        $params = [
            'response_type' => 'code',
            'client_id' => $this->client->appKey(),
            'redirect_uri' => $this->client->callbackUrl(),
            'state' => $state,
            'force_auth' => true,
        ];

        if ($country !== null) {
            $params['country'] = is_array($country) ? implode(',', $country) : $country;
        }

        $authUrl = 'https://auth.lazada.com/oauth/authorize?'.http_build_query($params);

        if ($return) {
            return $authUrl;
        }

        header('Location: '.$authUrl);
        exit;
    }
}
