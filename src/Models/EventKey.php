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

class EventKey
{
    public const PAYMENT_SUCCESS = 'payment_success';

    public const PAYMENT_FAILURE = 'payment_failure';

    public const SIGNUP_SUCCESS = 'signup_success';

    public const SIGNUP_FAILURE = 'signup_failure';

    public const DELAYED_SIGNUP_CREATION_SUCCESS = 'delayed_signup_creation_success';

    public const DELAYED_SIGNUP_CREATION_FAILURE = 'delayed_signup_creation_failure';

    public const BILLING_DATE_CHANGE = 'billing_date_change';

    public const EXPIRATION_DATE_CHANGE = 'expiration_date_change';

    public const RENEWAL_SUCCESS = 'renewal_success';

    public const RENEWAL_FAILURE = 'renewal_failure';

    public const SUBSCRIPTION_STATE_CHANGE = 'subscription_state_change';

    public const SUBSCRIPTION_PRODUCT_CHANGE = 'subscription_product_change';

    public const PENDING_CANCELLATION_CHANGE = 'pending_cancellation_change';

    public const EXPIRING_CARD = 'expiring_card';

    public const CUSTOMER_UPDATE = 'customer_update';

    public const CUSTOMER_CREATE = 'customer_create';

    public const CUSTOMER_DELETE = 'customer_delete';

    public const COMPONENT_ALLOCATION_CHANGE = 'component_allocation_change';

    public const METERED_USAGE = 'metered_usage';

    public const PREPAID_USAGE = 'prepaid_usage';

    public const UPGRADE_DOWNGRADE_SUCCESS = 'upgrade_downgrade_success';

    public const UPGRADE_DOWNGRADE_FAILURE = 'upgrade_downgrade_failure';

    public const STATEMENT_CLOSED = 'statement_closed';

    public const STATEMENT_SETTLED = 'statement_settled';

    public const SUBSCRIPTION_CARD_UPDATE = 'subscription_card_update';

    public const SUBSCRIPTION_GROUP_CARD_UPDATE = 'subscription_group_card_update';

    public const SUBSCRIPTION_BANK_ACCOUNT_UPDATE = 'subscription_bank_account_update';

    public const REFUND_SUCCESS = 'refund_success';

    public const REFUND_FAILURE = 'refund_failure';

    public const UPCOMING_RENEWAL_NOTICE = 'upcoming_renewal_notice';

    public const TRIAL_END_NOTICE = 'trial_end_notice';

    public const DUNNING_STEP_REACHED = 'dunning_step_reached';

    public const INVOICE_ISSUED = 'invoice_issued';

    public const PREPAID_SUBSCRIPTION_BALANCE_CHANGED = 'prepaid_subscription_balance_changed';

    public const SUBSCRIPTION_GROUP_SIGNUP_SUCCESS = 'subscription_group_signup_success';

    public const SUBSCRIPTION_GROUP_SIGNUP_FAILURE = 'subscription_group_signup_failure';

    public const DIRECT_DEBIT_PAYMENT_PAID_OUT = 'direct_debit_payment_paid_out';

    public const DIRECT_DEBIT_PAYMENT_REJECTED = 'direct_debit_payment_rejected';

    public const DIRECT_DEBIT_PAYMENT_PENDING = 'direct_debit_payment_pending';

    public const PENDING_PAYMENT_CREATED = 'pending_payment_created';

    public const PENDING_PAYMENT_FAILED = 'pending_payment_failed';

    public const PENDING_PAYMENT_COMPLETED = 'pending_payment_completed';

    public const PROFORMA_INVOICE_ISSUED = 'proforma_invoice_issued';

    public const SUBSCRIPTION_PREPAYMENT_ACCOUNT_BALANCE_CHANGED = 'subscription_prepayment_account_balance_changed';

    public const SUBSCRIPTION_SERVICE_CREDIT_ACCOUNT_BALANCE_CHANGED =
        'subscription_service_credit_account_balance_changed';

    public const CUSTOM_FIELD_VALUE_CHANGE = 'custom_field_value_change';

    public const ITEM_PRICE_POINT_CHANGED = 'item_price_point_changed';

    public const RENEWAL_SUCCESS_RECREATED = 'renewal_success_recreated';

    public const RENEWAL_FAILURE_RECREATED = 'renewal_failure_recreated';

    public const PAYMENT_SUCCESS_RECREATED = 'payment_success_recreated';

    public const PAYMENT_FAILURE_RECREATED = 'payment_failure_recreated';

    public const SUBSCRIPTION_DELETION = 'subscription_deletion';

    public const SUBSCRIPTION_GROUP_BANK_ACCOUNT_UPDATE = 'subscription_group_bank_account_update';

    public const SUBSCRIPTION_PAYPAL_ACCOUNT_UPDATE = 'subscription_paypal_account_update';

    public const SUBSCRIPTION_GROUP_PAYPAL_ACCOUNT_UPDATE = 'subscription_group_paypal_account_update';

    public const SUBSCRIPTION_CUSTOMER_CHANGE = 'subscription_customer_change';

    public const ACCOUNT_TRANSACTION_CHANGED = 'account_transaction_changed';

    public const GO_CARDLESS_PAYMENT_PAID_OUT = 'go_cardless_payment_paid_out';

    public const GO_CARDLESS_PAYMENT_REJECTED = 'go_cardless_payment_rejected';

    public const GO_CARDLESS_PAYMENT_PENDING = 'go_cardless_payment_pending';

    public const STRIPE_DIRECT_DEBIT_PAYMENT_PAID_OUT = 'stripe_direct_debit_payment_paid_out';

    public const STRIPE_DIRECT_DEBIT_PAYMENT_REJECTED = 'stripe_direct_debit_payment_rejected';

    public const STRIPE_DIRECT_DEBIT_PAYMENT_PENDING = 'stripe_direct_debit_payment_pending';

    public const MAXIO_PAYMENTS_DIRECT_DEBIT_PAYMENT_PAID_OUT = 'maxio_payments_direct_debit_payment_paid_out';

    public const MAXIO_PAYMENTS_DIRECT_DEBIT_PAYMENT_REJECTED = 'maxio_payments_direct_debit_payment_rejected';

    public const MAXIO_PAYMENTS_DIRECT_DEBIT_PAYMENT_PENDING = 'maxio_payments_direct_debit_payment_pending';

    public const INVOICE_IN_COLLECTIONS_CANCELED = 'invoice_in_collections_canceled';

    public const SUBSCRIPTION_ADDED_TO_GROUP = 'subscription_added_to_group';

    public const SUBSCRIPTION_REMOVED_FROM_GROUP = 'subscription_removed_from_group';

    public const CHARGEBACK_OPENED = 'chargeback_opened';

    public const CHARGEBACK_LOST = 'chargeback_lost';

    public const CHARGEBACK_ACCEPTED = 'chargeback_accepted';

    public const CHARGEBACK_CLOSED = 'chargeback_closed';

    public const CHARGEBACK_WON = 'chargeback_won';

    public const PAYMENT_COLLECTION_METHOD_CHANGED = 'payment_collection_method_changed';

    public const COMPONENT_BILLING_DATE_CHANGED = 'component_billing_date_changed';

    public const SUBSCRIPTION_TERM_RENEWAL_SCHEDULED = 'subscription_term_renewal_scheduled';

    public const SUBSCRIPTION_TERM_RENEWAL_PENDING = 'subscription_term_renewal_pending';

    public const SUBSCRIPTION_TERM_RENEWAL_ACTIVATED = 'subscription_term_renewal_activated';

    public const SUBSCRIPTION_TERM_RENEWAL_REMOVED = 'subscription_term_renewal_removed';

    private const _ALL_VALUES = [
        self::PAYMENT_SUCCESS,
        self::PAYMENT_FAILURE,
        self::SIGNUP_SUCCESS,
        self::SIGNUP_FAILURE,
        self::DELAYED_SIGNUP_CREATION_SUCCESS,
        self::DELAYED_SIGNUP_CREATION_FAILURE,
        self::BILLING_DATE_CHANGE,
        self::EXPIRATION_DATE_CHANGE,
        self::RENEWAL_SUCCESS,
        self::RENEWAL_FAILURE,
        self::SUBSCRIPTION_STATE_CHANGE,
        self::SUBSCRIPTION_PRODUCT_CHANGE,
        self::PENDING_CANCELLATION_CHANGE,
        self::EXPIRING_CARD,
        self::CUSTOMER_UPDATE,
        self::CUSTOMER_CREATE,
        self::CUSTOMER_DELETE,
        self::COMPONENT_ALLOCATION_CHANGE,
        self::METERED_USAGE,
        self::PREPAID_USAGE,
        self::UPGRADE_DOWNGRADE_SUCCESS,
        self::UPGRADE_DOWNGRADE_FAILURE,
        self::STATEMENT_CLOSED,
        self::STATEMENT_SETTLED,
        self::SUBSCRIPTION_CARD_UPDATE,
        self::SUBSCRIPTION_GROUP_CARD_UPDATE,
        self::SUBSCRIPTION_BANK_ACCOUNT_UPDATE,
        self::REFUND_SUCCESS,
        self::REFUND_FAILURE,
        self::UPCOMING_RENEWAL_NOTICE,
        self::TRIAL_END_NOTICE,
        self::DUNNING_STEP_REACHED,
        self::INVOICE_ISSUED,
        self::PREPAID_SUBSCRIPTION_BALANCE_CHANGED,
        self::SUBSCRIPTION_GROUP_SIGNUP_SUCCESS,
        self::SUBSCRIPTION_GROUP_SIGNUP_FAILURE,
        self::DIRECT_DEBIT_PAYMENT_PAID_OUT,
        self::DIRECT_DEBIT_PAYMENT_REJECTED,
        self::DIRECT_DEBIT_PAYMENT_PENDING,
        self::PENDING_PAYMENT_CREATED,
        self::PENDING_PAYMENT_FAILED,
        self::PENDING_PAYMENT_COMPLETED,
        self::PROFORMA_INVOICE_ISSUED,
        self::SUBSCRIPTION_PREPAYMENT_ACCOUNT_BALANCE_CHANGED,
        self::SUBSCRIPTION_SERVICE_CREDIT_ACCOUNT_BALANCE_CHANGED,
        self::CUSTOM_FIELD_VALUE_CHANGE,
        self::ITEM_PRICE_POINT_CHANGED,
        self::RENEWAL_SUCCESS_RECREATED,
        self::RENEWAL_FAILURE_RECREATED,
        self::PAYMENT_SUCCESS_RECREATED,
        self::PAYMENT_FAILURE_RECREATED,
        self::SUBSCRIPTION_DELETION,
        self::SUBSCRIPTION_GROUP_BANK_ACCOUNT_UPDATE,
        self::SUBSCRIPTION_PAYPAL_ACCOUNT_UPDATE,
        self::SUBSCRIPTION_GROUP_PAYPAL_ACCOUNT_UPDATE,
        self::SUBSCRIPTION_CUSTOMER_CHANGE,
        self::ACCOUNT_TRANSACTION_CHANGED,
        self::GO_CARDLESS_PAYMENT_PAID_OUT,
        self::GO_CARDLESS_PAYMENT_REJECTED,
        self::GO_CARDLESS_PAYMENT_PENDING,
        self::STRIPE_DIRECT_DEBIT_PAYMENT_PAID_OUT,
        self::STRIPE_DIRECT_DEBIT_PAYMENT_REJECTED,
        self::STRIPE_DIRECT_DEBIT_PAYMENT_PENDING,
        self::MAXIO_PAYMENTS_DIRECT_DEBIT_PAYMENT_PAID_OUT,
        self::MAXIO_PAYMENTS_DIRECT_DEBIT_PAYMENT_REJECTED,
        self::MAXIO_PAYMENTS_DIRECT_DEBIT_PAYMENT_PENDING,
        self::INVOICE_IN_COLLECTIONS_CANCELED,
        self::SUBSCRIPTION_ADDED_TO_GROUP,
        self::SUBSCRIPTION_REMOVED_FROM_GROUP,
        self::CHARGEBACK_OPENED,
        self::CHARGEBACK_LOST,
        self::CHARGEBACK_ACCEPTED,
        self::CHARGEBACK_CLOSED,
        self::CHARGEBACK_WON,
        self::PAYMENT_COLLECTION_METHOD_CHANGED,
        self::COMPONENT_BILLING_DATE_CHANGED,
        self::SUBSCRIPTION_TERM_RENEWAL_SCHEDULED,
        self::SUBSCRIPTION_TERM_RENEWAL_PENDING,
        self::SUBSCRIPTION_TERM_RENEWAL_ACTIVATED,
        self::SUBSCRIPTION_TERM_RENEWAL_REMOVED
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
        throw new Exception("$value is invalid for EventKey.");
    }
}
