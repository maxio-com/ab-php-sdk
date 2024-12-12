<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentAllocationChange;
use AdvancedBillingLib\Models\CreditAccountBalanceChanged;
use AdvancedBillingLib\Models\CustomFieldValueChange;
use AdvancedBillingLib\Models\DunningStepReached;
use AdvancedBillingLib\Models\Event;
use AdvancedBillingLib\Models\InvoiceIssued;
use AdvancedBillingLib\Models\ItemPricePointChanged;
use AdvancedBillingLib\Models\MeteredUsage;
use AdvancedBillingLib\Models\PaymentCollectionMethodChanged;
use AdvancedBillingLib\Models\PaymentRelatedEvents;
use AdvancedBillingLib\Models\PendingCancellationChange;
use AdvancedBillingLib\Models\PrepaidSubscriptionBalanceChanged;
use AdvancedBillingLib\Models\PrepaidUsage;
use AdvancedBillingLib\Models\PrepaymentAccountBalanceChanged;
use AdvancedBillingLib\Models\ProformaInvoiceIssued;
use AdvancedBillingLib\Models\RefundSuccess;
use AdvancedBillingLib\Models\SubscriptionGroupSignupEventData;
use AdvancedBillingLib\Models\SubscriptionProductChange;
use AdvancedBillingLib\Models\SubscriptionStateChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model Event
 *
 * @see Event
 */
class EventBuilder
{
    /**
     * @var Event
     */
    private $instance;

    private function __construct(Event $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Event Builder object.
     *
     * @param int $id
     * @param string $key
     * @param string $message
     * @param \DateTime $createdAt
     */
    public static function init(int $id, string $key, string $message, \DateTime $createdAt): self
    {
        return new self(new Event($id, $key, $message, $createdAt));
    }

    /**
     * Sets subscription id field.
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets customer id field.
     *
     * @param int|null $value
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets event specific data field.
     *
     * @param SubscriptionProductChange|SubscriptionStateChange|PaymentRelatedEvents|RefundSuccess|ComponentAllocationChange|MeteredUsage|PrepaidUsage|DunningStepReached|InvoiceIssued|PendingCancellationChange|PrepaidSubscriptionBalanceChanged|ProformaInvoiceIssued|SubscriptionGroupSignupEventData|CreditAccountBalanceChanged|PrepaymentAccountBalanceChanged|PaymentCollectionMethodChanged|ItemPricePointChanged|CustomFieldValueChange|null $value
     */
    public function eventSpecificData($value): self
    {
        $this->instance->setEventSpecificData($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Event object.
     */
    public function build(): Event
    {
        return CoreHelper::clone($this->instance);
    }
}
