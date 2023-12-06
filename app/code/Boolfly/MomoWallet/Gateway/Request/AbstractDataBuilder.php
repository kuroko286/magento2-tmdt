<?php

/************************************************************
 * *
 *  * Copyright © Boolfly. All rights reserved.
 *  * See COPYING.txt for license details.
 *  *
 *  * @author    info@boolfly.com
 * *  @project   Momo Wallet
 */

namespace Boolfly\MomoWallet\Gateway\Request;

use Magento\Payment\Gateway\Request\BuilderInterface;

/**
 * Class AbstractDataBuilder
 * @package Boolfly\MomoWallet\Gateway\Request
 */
abstract class AbstractDataBuilder implements BuilderInterface
{
    /**
     * Pay Url
     */
    public const PAY_URL_TYPE = 'captureMoMoWallet';

    /**@#+
     * Momo AIO Url path
     *
     * @public const
     */
    public const PAY_URL_PATH = 'gw_payment/transactionProcessor';

    /**
     * Refund Url Path
     */
    public const REFUND_TYPE = 'refundMoMoWallet';

    /**
     * Transaction Type: Refund
     */
    public const REFUND = 'refund';

    /**
     * Transaction Id
     */
    public const TRANSACTION_ID = 'transId';

    /**
     * Access Key
     */
    public const ACCESS_KEY = 'accessKey';

    /**
     * Secret key
     */
    public const SECRET_KEY = 'secretKey';

    /**
     * Partner code
     */
    public const PARTNER_CODE = 'partnerCode';

    /**
     * Request Id
     */
    public const REQUEST_ID = 'requestId';

    /**
     * Order Info
     */
    public const ORDER_INFO = 'orderInfo';

    /**
     * Return Url
     */
    public const RETURN_URL = 'returnUrl';

    /**
     * Notify Url
     */
    public const NOTIFY_URL = 'notifyUrl';

    /**
     * Extra Data
     */
    public const EXTRA_DATA = 'extraData';

    /**
     * Request Type
     */
    public const REQUEST_TYPE = 'requestType';

    /**
     * Signature
     */
    public const SIGNATURE = 'signature';

    /**
     * Merchant Ref
     */
    public const ORDER_ID = 'orderId';

    /**
     * Amount
     */
    public const AMOUNT = 'amount';
}
