<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class Event implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $message;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var SubscriptionProductChange|SubscriptionStateChange|PaymentRelatedEvents|RefundSuccess|ComponentAllocationChange|MeteredUsage|PrepaidUsage|DunningStepReached|InvoiceIssued|PendingCancellationChange|PrepaidSubscriptionBalanceChanged|ProformaInvoiceIssued|SubscriptionGroupSignupEventData|CreditAccountBalanceChanged|PrepaymentAccountBalanceChanged|PaymentCollectionMethodChanged|ItemPricePointChanged|CustomFieldValueChange|null
     */
    private $eventSpecificData;

    /**
     * @param int $id
     * @param string $key
     * @param string $message
     * @param \DateTime $createdAt
     */
    public function __construct(int $id, string $key, string $message, \DateTime $createdAt)
    {
        $this->id = $id;
        $this->key = $key;
        $this->message = $message;
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Key.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     *
     * @required
     * @maps key
     * @factory \AdvancedBillingLib\Models\EventKey::checkValue
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @required
     * @maps message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Event Specific Data.
     * The schema varies based on the event key. The key-to-event data mapping is as follows:
     *
     * * `subscription_product_change` - SubscriptionProductChange
     * * `subscription_state_change` - SubscriptionStateChange
     * * `signup_success`, `delayed_signup_creation_success`, `payment_success`, `payment_failure`,
     * `renewal_success`, `renewal_failure`, `chargeback_lost`, `chargeback_accepted`, `chargeback_closed` -
     * PaymentRelatedEvents
     * * `refund_success` - RefundSuccess
     * * `component_allocation_change` - ComponentAllocationChange
     * * `metered_usage` - MeteredUsage
     * * `prepaid_usage` - PrepaidUsage
     * * `dunning_step_reached` - DunningStepReached
     * * `invoice_issued` - InvoiceIssued
     * * `pending_cancellation_change` - PendingCancellationChange
     * * `prepaid_subscription_balance_changed` - PrepaidSubscriptionBalanceChanged
     * * `subscription_group_signup_success` and `subscription_group_signup_failure` -
     * SubscriptionGroupSignupEventData
     * * `proforma_invoice_issued` - ProformaInvoiceIssued
     * * `subscription_prepayment_account_balance_changed` - PrepaymentAccountBalanceChanged
     * * `payment_collection_method_changed` - PaymentCollectionMethodChanged
     * * `subscription_service_credit_account_balance_changed` - CreditAccountBalanceChanged
     * * `item_price_point_changed` - ItemPricePointChanged
     * * `custom_field_value_change` - CustomFieldValueChange
     * * The rest, that is `delayed_signup_creation_failure`, `billing_date_change`,
     * `expiration_date_change`, `expiring_card`,
     * `customer_update`, `customer_create`, `customer_delete`, `upgrade_downgrade_success`,
     * `upgrade_downgrade_failure`,
     * `statement_closed`, `statement_settled`, `subscription_card_update`,
     * `subscription_group_card_update`,
     * `subscription_bank_account_update`, `refund_failure`, `upcoming_renewal_notice`, `trial_end_notice`,
     * `direct_debit_payment_paid_out`, `direct_debit_payment_rejected`, `direct_debit_payment_pending`,
     * `pending_payment_created`,
     * `pending_payment_failed`, `pending_payment_completed`,  don't have event_specific_data defined,
     * `renewal_success_recreated`, `renewal_failure_recreated`, `payment_success_recreated`,
     * `payment_failure_recreated`,
     * `subscription_deletion`, `subscription_group_bank_account_update`,
     * `subscription_paypal_account_update`, `subscription_group_paypal_account_update`,
     * `subscription_customer_change`, `account_transaction_changed`, `go_cardless_payment_paid_out`,
     * `go_cardless_payment_rejected`,
     * `go_cardless_payment_pending`, `stripe_direct_debit_payment_paid_out`,
     * `stripe_direct_debit_payment_rejected`, `stripe_direct_debit_payment_pending`,
     * `maxio_payments_direct_debit_payment_paid_out`, `maxio_payments_direct_debit_payment_rejected`,
     * `maxio_payments_direct_debit_payment_pending`,
     * `invoice_in_collections_canceled`, `subscription_added_to_group`, `subscription_removed_from_group`,
     * `chargeback_opened`, `chargeback_lost`,
     * `chargeback_accepted`, `chargeback_closed`, `chargeback_won`, `payment_collection_method_changed`,
     * `component_billing_date_changed`,
     * `subscription_term_renewal_scheduled`, `subscription_term_renewal_pending`,
     * `subscription_term_renewal_activated`, `subscription_term_renewal_removed`
     * they map to `null` instead.
     *
     * @return SubscriptionProductChange|SubscriptionStateChange|PaymentRelatedEvents|RefundSuccess|ComponentAllocationChange|MeteredUsage|PrepaidUsage|DunningStepReached|InvoiceIssued|PendingCancellationChange|PrepaidSubscriptionBalanceChanged|ProformaInvoiceIssued|SubscriptionGroupSignupEventData|CreditAccountBalanceChanged|PrepaymentAccountBalanceChanged|PaymentCollectionMethodChanged|ItemPricePointChanged|CustomFieldValueChange|null
     */
    public function getEventSpecificData()
    {
        return $this->eventSpecificData;
    }

    /**
     * Sets Event Specific Data.
     * The schema varies based on the event key. The key-to-event data mapping is as follows:
     *
     * * `subscription_product_change` - SubscriptionProductChange
     * * `subscription_state_change` - SubscriptionStateChange
     * * `signup_success`, `delayed_signup_creation_success`, `payment_success`, `payment_failure`,
     * `renewal_success`, `renewal_failure`, `chargeback_lost`, `chargeback_accepted`, `chargeback_closed` -
     * PaymentRelatedEvents
     * * `refund_success` - RefundSuccess
     * * `component_allocation_change` - ComponentAllocationChange
     * * `metered_usage` - MeteredUsage
     * * `prepaid_usage` - PrepaidUsage
     * * `dunning_step_reached` - DunningStepReached
     * * `invoice_issued` - InvoiceIssued
     * * `pending_cancellation_change` - PendingCancellationChange
     * * `prepaid_subscription_balance_changed` - PrepaidSubscriptionBalanceChanged
     * * `subscription_group_signup_success` and `subscription_group_signup_failure` -
     * SubscriptionGroupSignupEventData
     * * `proforma_invoice_issued` - ProformaInvoiceIssued
     * * `subscription_prepayment_account_balance_changed` - PrepaymentAccountBalanceChanged
     * * `payment_collection_method_changed` - PaymentCollectionMethodChanged
     * * `subscription_service_credit_account_balance_changed` - CreditAccountBalanceChanged
     * * `item_price_point_changed` - ItemPricePointChanged
     * * `custom_field_value_change` - CustomFieldValueChange
     * * The rest, that is `delayed_signup_creation_failure`, `billing_date_change`,
     * `expiration_date_change`, `expiring_card`,
     * `customer_update`, `customer_create`, `customer_delete`, `upgrade_downgrade_success`,
     * `upgrade_downgrade_failure`,
     * `statement_closed`, `statement_settled`, `subscription_card_update`,
     * `subscription_group_card_update`,
     * `subscription_bank_account_update`, `refund_failure`, `upcoming_renewal_notice`, `trial_end_notice`,
     * `direct_debit_payment_paid_out`, `direct_debit_payment_rejected`, `direct_debit_payment_pending`,
     * `pending_payment_created`,
     * `pending_payment_failed`, `pending_payment_completed`,  don't have event_specific_data defined,
     * `renewal_success_recreated`, `renewal_failure_recreated`, `payment_success_recreated`,
     * `payment_failure_recreated`,
     * `subscription_deletion`, `subscription_group_bank_account_update`,
     * `subscription_paypal_account_update`, `subscription_group_paypal_account_update`,
     * `subscription_customer_change`, `account_transaction_changed`, `go_cardless_payment_paid_out`,
     * `go_cardless_payment_rejected`,
     * `go_cardless_payment_pending`, `stripe_direct_debit_payment_paid_out`,
     * `stripe_direct_debit_payment_rejected`, `stripe_direct_debit_payment_pending`,
     * `maxio_payments_direct_debit_payment_paid_out`, `maxio_payments_direct_debit_payment_rejected`,
     * `maxio_payments_direct_debit_payment_pending`,
     * `invoice_in_collections_canceled`, `subscription_added_to_group`, `subscription_removed_from_group`,
     * `chargeback_opened`, `chargeback_lost`,
     * `chargeback_accepted`, `chargeback_closed`, `chargeback_won`, `payment_collection_method_changed`,
     * `component_billing_date_changed`,
     * `subscription_term_renewal_scheduled`, `subscription_term_renewal_pending`,
     * `subscription_term_renewal_activated`, `subscription_term_renewal_removed`
     * they map to `null` instead.
     *
     * @maps event_specific_data
     * @mapsBy anyOf(oneOf(SubscriptionProductChange,SubscriptionStateChange,PaymentRelatedEvents,RefundSuccess,ComponentAllocationChange,MeteredUsage,PrepaidUsage,DunningStepReached,InvoiceIssued,PendingCancellationChange,PrepaidSubscriptionBalanceChanged,ProformaInvoiceIssued,SubscriptionGroupSignupEventData,CreditAccountBalanceChanged,PrepaymentAccountBalanceChanged,PaymentCollectionMethodChanged,ItemPricePointChanged,CustomFieldValueChange),null)
     *
     * @param SubscriptionProductChange|SubscriptionStateChange|PaymentRelatedEvents|RefundSuccess|ComponentAllocationChange|MeteredUsage|PrepaidUsage|DunningStepReached|InvoiceIssued|PendingCancellationChange|PrepaidSubscriptionBalanceChanged|ProformaInvoiceIssued|SubscriptionGroupSignupEventData|CreditAccountBalanceChanged|PrepaymentAccountBalanceChanged|PaymentCollectionMethodChanged|ItemPricePointChanged|CustomFieldValueChange|null $eventSpecificData
     */
    public function setEventSpecificData($eventSpecificData): void
    {
        $this->eventSpecificData = $eventSpecificData;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']                  = $this->id;
        $json['key']                 = EventKey::checkValue($this->key);
        $json['message']             = $this->message;
        $json['subscription_id']     = $this->subscriptionId;
        $json['customer_id']         = $this->customerId;
        $json['created_at']          = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['event_specific_data'] =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->eventSpecificData,
                'anyOf(oneOf(SubscriptionProductChange,SubscriptionStateChange,PaymentRelatedEvents,R' .
                'efundSuccess,ComponentAllocationChange,MeteredUsage,PrepaidUsage,DunningStepReached,' .
                'InvoiceIssued,PendingCancellationChange,PrepaidSubscriptionBalanceChanged,ProformaIn' .
                'voiceIssued,SubscriptionGroupSignupEventData,CreditAccountBalanceChanged,PrepaymentA' .
                'ccountBalanceChanged,PaymentCollectionMethodChanged,ItemPricePointChanged,CustomFiel' .
                'dValueChange),null)'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
