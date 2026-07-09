<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * Copyright (c) 2025 Jin <j@sax.vn> All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\Lazada\Resources;

use EcomPHP\Lazada\Resource;
use GuzzleHttp\RequestOptions;

class Wallet extends Resource
{
    protected $authorization_required = false;

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Ftransfer%2Fquery
     */
    public function DirectTransferQuery($transfer_order_id)
    {
        return $this->call('GET', 'wallet/transfer/query', [
            RequestOptions::QUERY => [
                'transfer_order_id' => $transfer_order_id,
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Ftransfer%2Frequest
     */
    public function DirectTransferRequest($transfer_order_id, $amount, $account_number, $withdrawable = true)
    {
        return $this->call('POST', 'wallet/transfer/request', [
            RequestOptions::QUERY => [
                'amount' => $amount,
                'transfer_order_id' => $transfer_order_id,
                'account_number' => $account_number,
                'withdrawable' => $withdrawable,
            ],
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Fgiftcode%2Fquery
     */
    public function GiftCodeQuery($transfer_order_id, $page)
    {
        return $this->call('GET', 'wallet/giftcode/query', [
            RequestOptions::QUERY => [
                'transfer_order_id' => $transfer_order_id,
                'page' => $page,
            ]
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Fgiftcode%2Frequest
     */
    public function GiftCodeRequest($transfer_order_id, $amount, $quantity, $start_timestamp, $end_timestamp)
    {
        return $this->call('POST', 'wallet/giftcode/request', [
            RequestOptions::QUERY => [
                'amount' => $amount,
                'transfer_order_id' => $transfer_order_id,
                'quantity' => $quantity,
                'start_timestamp' => $start_timestamp,
                'end_timestamp' => $end_timestamp,
            ],
        ]);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Freconciliation
     */
    public function Reconciliation($date)
    {
        return $this->call('GET', 'wallet/reconciliation', [
            RequestOptions::QUERY => [
                'date' => $date,
            ]
        ]);
    }
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Fopen%2Freconciliation
     */
    public function Reconciliation2($params = [])
    {
        return $this->get('wallet/open/reconciliation', $params);
    }

}
