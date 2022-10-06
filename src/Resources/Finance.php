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

class Finance extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffinance%2Fpayout%2Fstatus%2Fget
     */
    public function GetPayoutStatus($created_after = null)
    {
        $created_after = $created_after ?? date('Y-m-d', strtotime('-7 days'));

        return $this->call('GET', 'finance/payout/status/get', [
            RequestOptions::QUERY => [
                'created_after' => $created_after,
            ],
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffinance%2Ftransaction%2FaccountTransactions%2Fquery
     */
    public function QueryAccountTransactions($params = [])
    {
        $params = array_merge([
            'page_size' => 20,
            'page_num' => 1,
            'start_time' => date('Y-m-d', strtotime('-30 days')),
            'end_time' => date('Y-m-d'),
        ], $params);

        return $this->call('POST', 'finance/transaction/accountTransactions/query', [
            RequestOptions::FORM_PARAMS => $params,
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Ffinance%2Ftransaction%2Fdetails%2Fget
     */
    public function QueryTransactionDetails($params = [])
    {
        $params = array_merge([
            'start_time' => date('Y-m-d', strtotime('-30 days')),
            'end_time' => date('Y-m-d'),
        ], $params);

        return $this->call('GET', 'finance/transaction/details/get', [
            RequestOptions::QUERY => $params,
        ]);
    }
}
