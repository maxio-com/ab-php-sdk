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

class EventType
{
    public const ACCOUNT_TRANSACTION_CHANGED = 'account_transaction_changed';

    public const BILLING_DATE_CHANGE = 'billing_date_change';

    public const COMPONENT_ALLOCATION_CHANGE = 'component_allocation_change';

    public const CUSTOMER_UPDATE = 'customer_update';

    public const CUSTOMER_CREATE = 'customer_create';

    public const DUNNING_STEP_REACHED = 'dunning_step_reached';

    public const EXPIRATION_DATE_CHANGE = 'expiration_date_change';

    public const EXPIRING_CARD = 'expiring_card';

    public const METERED_USAGE = 'metered_usage';

    public const PAYMENT_SUCCESS = 'payment_success';

    public const PAYMENT_SUCCESS_RECREATED = 'payment_success_recreated';

    public const PAYMENT_FAILURE = 'payment_failure';

    public const PAYMENT_FAILURE_RECREATED = 'payment_failure_recreated';

    public const REFUND_FAILURE = 'refund_failure';

    public const REFUND_SUCCESS = 'refund_success';

    public const RENEWAL_SUCCESS = 'renewal_success';

    public const RENEWAL_SUCCESS_RECREATED = 'renewal_success_recreated';

    public const RENEWAL_FAILURE = 'renewal_failure';

    public const SIGNUP_SUCCESS = 'signup_success';

    public const SIGNUP_FAILURE = 'signup_failure';

    public const STATEMENT_CLOSED = 'statement_closed';

    public const STATEMENT_SETTLED = 'statement_settled';

    public const SUBSCRIPTION_BANK_ACCOUNT_UPDATE = 'subscription_bank_account_update';

    public const SUBSCRIPTION_DELETION = 'subscription_deletion';

    public const SUBSCRIPTION_PAYPAL_ACCOUNT_UPDATE = 'subscription_paypal_account_update';

    public const SUBSCRIPTION_PRODUCT_CHANGE = 'subscription_product_change';

    public const SUBSCRIPTION_STATE_CHANGE = 'subscription_state_change';

    public const TRIAL_END_NOTICE = 'trial_end_notice';

    public const UPGRADE_DOWNGRADE_SUCCESS = 'upgrade_downgrade_success';

    public const UPGRADE_DOWNGRADE_FAILURE = 'upgrade_downgrade_failure';

    public const UPCOMING_RENEWAL_NOTICE = 'upcoming_renewal_notice';

    public const CUSTOM_FIELD_VALUE_CHANGE = 'custom_field_value_change';

    public const SUBSCRIPTION_PREPAYMENT_ACCOUNT_BALANCE_CHANGED = 'subscription_prepayment_account_balance_changed';

    public const SUBSCRIPTION_SERVICE_CREDIT_ACCOUNT_BALANCE_CHANGED =
        'subscription_service_credit_account_balance_changed';

    private const _ALL_VALUES = [
        self::ACCOUNT_TRANSACTION_CHANGED,
        self::BILLING_DATE_CHANGE,
        self::COMPONENT_ALLOCATION_CHANGE,
        self::CUSTOMER_UPDATE,
        self::CUSTOMER_CREATE,
        self::DUNNING_STEP_REACHED,
        self::EXPIRATION_DATE_CHANGE,
        self::EXPIRING_CARD,
        self::METERED_USAGE,
        self::PAYMENT_SUCCESS,
        self::PAYMENT_SUCCESS_RECREATED,
        self::PAYMENT_FAILURE,
        self::PAYMENT_FAILURE_RECREATED,
        self::REFUND_FAILURE,
        self::REFUND_SUCCESS,
        self::RENEWAL_SUCCESS,
        self::RENEWAL_SUCCESS_RECREATED,
        self::RENEWAL_FAILURE,
        self::SIGNUP_SUCCESS,
        self::SIGNUP_FAILURE,
        self::STATEMENT_CLOSED,
        self::STATEMENT_SETTLED,
        self::SUBSCRIPTION_BANK_ACCOUNT_UPDATE,
        self::SUBSCRIPTION_DELETION,
        self::SUBSCRIPTION_PAYPAL_ACCOUNT_UPDATE,
        self::SUBSCRIPTION_PRODUCT_CHANGE,
        self::SUBSCRIPTION_STATE_CHANGE,
        self::TRIAL_END_NOTICE,
        self::UPGRADE_DOWNGRADE_SUCCESS,
        self::UPGRADE_DOWNGRADE_FAILURE,
        self::UPCOMING_RENEWAL_NOTICE,
        self::CUSTOM_FIELD_VALUE_CHANGE,
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
        throw new Exception("$value is invalid for EventType.");
    }
}
