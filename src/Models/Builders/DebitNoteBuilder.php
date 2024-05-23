<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DebitNote;
use AdvancedBillingLib\Models\InvoiceAddress;
use AdvancedBillingLib\Models\InvoiceCustomer;
use AdvancedBillingLib\Models\InvoiceSeller;
use Core\Utils\CoreHelper;

/**
 * Builder for model DebitNote
 *
 * @see DebitNote
 */
class DebitNoteBuilder
{
    /**
     * @var DebitNote
     */
    private $instance;

    private function __construct(DebitNote $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new debit note Builder object.
     */
    public static function init(): self
    {
        return new self(new DebitNote());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets site id field.
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets number field.
     */
    public function number(?int $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Sets sequence number field.
     */
    public function sequenceNumber(?int $value): self
    {
        $this->instance->setSequenceNumber($value);
        return $this;
    }

    /**
     * Sets origin credit note uid field.
     */
    public function originCreditNoteUid(?string $value): self
    {
        $this->instance->setOriginCreditNoteUid($value);
        return $this;
    }

    /**
     * Sets origin credit note number field.
     */
    public function originCreditNoteNumber(?string $value): self
    {
        $this->instance->setOriginCreditNoteNumber($value);
        return $this;
    }

    /**
     * Sets issue date field.
     */
    public function issueDate(?\DateTime $value): self
    {
        $this->instance->setIssueDate($value);
        return $this;
    }

    /**
     * Sets applied date field.
     */
    public function appliedDate(?\DateTime $value): self
    {
        $this->instance->setAppliedDate($value);
        return $this;
    }

    /**
     * Sets due date field.
     */
    public function dueDate(?\DateTime $value): self
    {
        $this->instance->setDueDate($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets role field.
     */
    public function role(?string $value): self
    {
        $this->instance->setRole($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets seller field.
     */
    public function seller(?InvoiceSeller $value): self
    {
        $this->instance->setSeller($value);
        return $this;
    }

    /**
     * Sets customer field.
     */
    public function customer(?InvoiceCustomer $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?InvoiceAddress $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets shipping address field.
     */
    public function shippingAddress(?InvoiceAddress $value): self
    {
        $this->instance->setShippingAddress($value);
        return $this;
    }

    /**
     * Sets line items field.
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Sets discounts field.
     */
    public function discounts(?array $value): self
    {
        $this->instance->setDiscounts($value);
        return $this;
    }

    /**
     * Sets taxes field.
     */
    public function taxes(?array $value): self
    {
        $this->instance->setTaxes($value);
        return $this;
    }

    /**
     * Sets refunds field.
     */
    public function refunds(?array $value): self
    {
        $this->instance->setRefunds($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new debit note object.
     */
    public function build(): DebitNote
    {
        return CoreHelper::clone($this->instance);
    }
}
