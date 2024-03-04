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
     * @var SubscriptionProductChange|SubscriptionStateChange|PaymentRelatedEvents|RefundSuccess|ComponentAllocationChange|MeteredUsage|PrepaidUsage|DunningStepReached|InvoiceIssued|PendingCancellationChange|PrepaidSubscriptionBalanceChanged|ProformaInvoiceIssued|SubscriptionGroupSignupSuccess|SubscriptionGroupSignupFailure|CreditAccountBalanceChanged|PrepaymentAccountBalanceChanged|PaymentCollectionMethodChanged|ItemPricePointChanged|CustomFieldValueChange|null
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
     *
     * @return SubscriptionProductChange|SubscriptionStateChange|PaymentRelatedEvents|RefundSuccess|ComponentAllocationChange|MeteredUsage|PrepaidUsage|DunningStepReached|InvoiceIssued|PendingCancellationChange|PrepaidSubscriptionBalanceChanged|ProformaInvoiceIssued|SubscriptionGroupSignupSuccess|SubscriptionGroupSignupFailure|CreditAccountBalanceChanged|PrepaymentAccountBalanceChanged|PaymentCollectionMethodChanged|ItemPricePointChanged|CustomFieldValueChange|null
     */
    public function getEventSpecificData()
    {
        return $this->eventSpecificData;
    }

    /**
     * Sets Event Specific Data.
     *
     * @maps event_specific_data
     * @mapsBy anyOf(oneOf(SubscriptionProductChange,SubscriptionStateChange,PaymentRelatedEvents,RefundSuccess,ComponentAllocationChange,MeteredUsage,PrepaidUsage,DunningStepReached,InvoiceIssued,PendingCancellationChange,PrepaidSubscriptionBalanceChanged,ProformaInvoiceIssued,SubscriptionGroupSignupSuccess,SubscriptionGroupSignupFailure,CreditAccountBalanceChanged,PrepaymentAccountBalanceChanged,PaymentCollectionMethodChanged,ItemPricePointChanged,CustomFieldValueChange),null)
     *
     * @param SubscriptionProductChange|SubscriptionStateChange|PaymentRelatedEvents|RefundSuccess|ComponentAllocationChange|MeteredUsage|PrepaidUsage|DunningStepReached|InvoiceIssued|PendingCancellationChange|PrepaidSubscriptionBalanceChanged|ProformaInvoiceIssued|SubscriptionGroupSignupSuccess|SubscriptionGroupSignupFailure|CreditAccountBalanceChanged|PrepaymentAccountBalanceChanged|PaymentCollectionMethodChanged|ItemPricePointChanged|CustomFieldValueChange|null $eventSpecificData
     */
    public function setEventSpecificData($eventSpecificData): void
    {
        $this->eventSpecificData = $eventSpecificData;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        $json['key']                 = $this->key;
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
                'voiceIssued,SubscriptionGroupSignupSuccess,SubscriptionGroupSignupFailure,CreditAcco' .
                'untBalanceChanged,PrepaymentAccountBalanceChanged,PaymentCollectionMethodChanged,Ite' .
                'mPricePointChanged,CustomFieldValueChange),null)'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
