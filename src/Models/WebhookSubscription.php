<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

class WebhookSubscription
{
    public const BILLING_DATE_CHANGE = 'billing_date_change';

    public const COMPONENT_ALLOCATION_CHANGE = 'component_allocation_change';

    public const CUSTOMER_CREATE = 'customer_create';

    public const CUSTOMER_UPDATE = 'customer_update';

    public const DUNNING_STEP_REACHED = 'dunning_step_reached';

    public const EXPIRING_CARD = 'expiring_card';

    public const EXPIRATION_DATE_CHANGE = 'expiration_date_change';

    public const INVOICE_ISSUED = 'invoice_issued';

    public const METERED_USAGE = 'metered_usage';

    public const PAYMENT_FAILURE = 'payment_failure';

    public const PAYMENT_SUCCESS = 'payment_success';

    public const DIRECT_DEBIT_PAYMENT_PENDING = 'direct_debit_payment_pending';

    public const DIRECT_DEBIT_PAYMENT_PAID_OUT = 'direct_debit_payment_paid_out';

    public const DIRECT_DEBIT_PAYMENT_REJECTED = 'direct_debit_payment_rejected';

    public const PREPAID_SUBSCRIPTION_BALANCE_CHANGED = 'prepaid_subscription_balance_changed';

    public const PREPAID_USAGE = 'prepaid_usage';

    public const REFUND_FAILURE = 'refund_failure';

    public const REFUND_SUCCESS = 'refund_success';

    public const RENEWAL_FAILURE = 'renewal_failure';

    public const RENEWAL_SUCCESS = 'renewal_success';

    public const SIGNUP_FAILURE = 'signup_failure';

    public const SIGNUP_SUCCESS = 'signup_success';

    public const STATEMENT_CLOSED = 'statement_closed';

    public const STATEMENT_SETTLED = 'statement_settled';

    public const SUBSCRIPTION_CARD_UPDATE = 'subscription_card_update';

    public const SUBSCRIPTION_GROUP_CARD_UPDATE = 'subscription_group_card_update';

    public const SUBSCRIPTION_PRODUCT_CHANGE = 'subscription_product_change';

    public const SUBSCRIPTION_STATE_CHANGE = 'subscription_state_change';

    public const TRIAL_END_NOTICE = 'trial_end_notice';

    public const UPCOMING_RENEWAL_NOTICE = 'upcoming_renewal_notice';

    public const UPGRADE_DOWNGRADE_FAILURE = 'upgrade_downgrade_failure';

    public const UPGRADE_DOWNGRADE_SUCCESS = 'upgrade_downgrade_success';

    public const PENDING_CANCELLATION_CHANGE = 'pending_cancellation_change';

    public const SUBSCRIPTION_PREPAYMENT_ACCOUNT_BALANCE_CHANGED = 'subscription_prepayment_account_balance_changed';

    public const SUBSCRIPTION_SERVICE_CREDIT_ACCOUNT_BALANCE_CHANGED =
        'subscription_service_credit_account_balance_changed';

    private const _ALL_VALUES = [
        self::BILLING_DATE_CHANGE,
        self::COMPONENT_ALLOCATION_CHANGE,
        self::CUSTOMER_CREATE,
        self::CUSTOMER_UPDATE,
        self::DUNNING_STEP_REACHED,
        self::EXPIRING_CARD,
        self::EXPIRATION_DATE_CHANGE,
        self::INVOICE_ISSUED,
        self::METERED_USAGE,
        self::PAYMENT_FAILURE,
        self::PAYMENT_SUCCESS,
        self::DIRECT_DEBIT_PAYMENT_PENDING,
        self::DIRECT_DEBIT_PAYMENT_PAID_OUT,
        self::DIRECT_DEBIT_PAYMENT_REJECTED,
        self::PREPAID_SUBSCRIPTION_BALANCE_CHANGED,
        self::PREPAID_USAGE,
        self::REFUND_FAILURE,
        self::REFUND_SUCCESS,
        self::RENEWAL_FAILURE,
        self::RENEWAL_SUCCESS,
        self::SIGNUP_FAILURE,
        self::SIGNUP_SUCCESS,
        self::STATEMENT_CLOSED,
        self::STATEMENT_SETTLED,
        self::SUBSCRIPTION_CARD_UPDATE,
        self::SUBSCRIPTION_GROUP_CARD_UPDATE,
        self::SUBSCRIPTION_PRODUCT_CHANGE,
        self::SUBSCRIPTION_STATE_CHANGE,
        self::TRIAL_END_NOTICE,
        self::UPCOMING_RENEWAL_NOTICE,
        self::UPGRADE_DOWNGRADE_FAILURE,
        self::UPGRADE_DOWNGRADE_SUCCESS,
        self::PENDING_CANCELLATION_CHANGE,
        self::SUBSCRIPTION_PREPAYMENT_ACCOUNT_BALANCE_CHANGED,
        self::SUBSCRIPTION_SERVICE_CREDIT_ACCOUNT_BALANCE_CHANGED
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for WebhookSubscription.");
    }
}
