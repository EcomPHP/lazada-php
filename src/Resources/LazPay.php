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

class LazPay extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flazadapay%2Fv1%2Fdebit%2Fconsult_payment
     */
    public function ConsultPayment($params = [])
    {
        return $this->get('lazadapay/v1/debit/consult_payment', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Fsubscription%2Fcreate
     */
    public function CreateSubscriptionToFusion($params = [])
    {
        return $this->post('insurance/subscription/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Fservice%2Fcreateorder
     */
    public function DGUtiityPreCreateOrder($params = [])
    {
        return $this->get('digital/service/createorder', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Fservice%2FgetPaymentStatus
     */
    public function DGUtilityPreGetPaymentStatus($params = [])
    {
        return $this->get('digital/service/getPaymentStatus', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Fservice%2FupdateFulfillemtStatus
     */
    public function DGUtilityPreUpdateFulfillemtStatus($params = [])
    {
        return $this->get('digital/service/updateFulfillemtStatus', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Forder%2FalterStatus
     */
    public function DigitalAlterOrderStatus($params = [])
    {
        return $this->get('digital/order/alterStatus', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Forder%2Fcreate
     */
    public function DigitalCreateOrder($params = [])
    {
        return $this->get('digital/order/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fdigital%2Forder%2FgetStatus
     */
    public function DigitalQueryOrder($params = [])
    {
        return $this->get('digital/order/getStatus', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Fsubscription%2FgetSubscription
     */
    public function GetSubscriptionToFusion($params = [])
    {
        return $this->get('insurance/subscription/getSubscription', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Forder%2FalterStatus
     */
    public function InsuranceAlterOrderStatus($params = [])
    {
        return $this->get('insurance/order/alterStatus', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Forder%2Fcreate
     */
    public function InsuranceCreateOrder($params = [])
    {
        return $this->get('insurance/order/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Fpromotion%2FgetPromotions
     */
    public function InsuranceGetPromotions($params = [])
    {
        return $this->get('insurance/promotion/getPromotions', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Forder%2FgetStatus
     */
    public function InsuranceQueryOrder($params = [])
    {
        return $this->get('insurance/order/getStatus', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Flazpay%2Fv1%2Fpayment%2Fnotify
     */
    public function LazPayPaymentNotify($params = [])
    {
        return $this->get('lazpay/v1/payment/notify', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Frpa%2Fid%2Ftax%2Fcallback
     */
    public function LazadaCFOInvoiceRpaCallback($params = [])
    {
        return $this->get('rpa/id/tax/callback', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Fopen%2Fservice%2Fbalance%2Fquery
     */
    public function OpenServiceBalanceQuery($params = [])
    {
        return $this->get('wallet/open/service/balance/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Fopen%2Fservice%2Fkyc%2Fquery
     */
    public function OpenServiceKycQuery($params = [])
    {
        return $this->get('wallet/open/service/kyc/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Fopen%2Fservice%2Fwithdraw
     */
    public function OpenServiceWithdrawApply($params = [])
    {
        return $this->get('wallet/open/service/withdraw', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Fopen%2Fservice%2Fwithdraw%2Fquery
     */
    public function OpenServiceWithdrawQuery($params = [])
    {
        return $this->get('wallet/open/service/withdraw/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fwallet%2Fopen%2Fservice%2Freconciliation
     */
    public function Reconciliation($params = [])
    {
        return $this->get('wallet/open/service/reconciliation', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Fpromotion%2FcollectBenefit
     */
    public function CollectBenefit($params = [])
    {
        return $this->get('insurance/promotion/collectBenefit', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2FsyncCDP
     */
    public function InsuranceRealTimeCDP($params = [])
    {
        return $this->get('insurance/syncCDP', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Faddon%2Forders%2Fquery
     */
    public function QueryAddonOrder($params = [])
    {
        return $this->get('insurance/addon/orders/query', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Fpromotion%2FqueryBenefit
     */
    public function QueryBenefit($params = [])
    {
        return $this->get('insurance/promotion/queryBenefit', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Finsurance%2Fvoucher%2FredeemVoucher
     */
    public function RedeemMpVoucher($params = [])
    {
        return $this->get('insurance/voucher/redeemVoucher', $params);
    }
}
