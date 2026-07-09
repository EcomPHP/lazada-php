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

use GuzzleHttp\RequestOptions;

abstract class Resource
{
    protected $authorization_required = true;

    /** @var Client */
    protected $client;

    public function useApiClient(Client $client)
    {
        $this->client = $client;

        return $this;
    }

    public function call($method, $uri, $params = [], $wrapDataKey = 'data')
    {
        if (!$this->authorization_required) {
            $query = $params[RequestOptions::QUERY] ?? [];
            $query['access_token'] = '';
            $params[RequestOptions::QUERY] = $query;
        }

        return $this->client->call($method, $uri, $params, $wrapDataKey);
    }

    protected function get($uri, $params = [])
    {
        return $this->call('GET', $uri, [
            RequestOptions::QUERY => $params,
        ]);
    }

    protected function post($uri, $params = [])
    {
        return $this->call('POST', $uri, [
            RequestOptions::JSON => $params,
        ]);
    }

    public static function formatListIds($listIds)
    {
        $stringListIds = is_array($listIds) ? implode(',', $listIds) : $listIds;

        // wrapping list inside [ and ], example: [1, 2, 3]
        if (substr($stringListIds, 0, 1) !== '[') {
            $stringListIds = '['. $stringListIds;
        }

        if (substr($stringListIds, -1) !== ']') {
            $stringListIds = $stringListIds . ']';
        }

        return $stringListIds;
    }
}
