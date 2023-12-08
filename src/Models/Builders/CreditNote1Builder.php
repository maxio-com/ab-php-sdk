<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BillingAddress;
use AdvancedBillingLib\Models\CreditNote1;
use AdvancedBillingLib\Models\Customer1;
use AdvancedBillingLib\Models\Seller;
use AdvancedBillingLib\Models\ShippingAddress;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditNote1
 *
 * @see CreditNote1
 */
class CreditNote1Builder
{
    /**
     * @var CreditNote1
     */
    private $instance;

    private function __construct(CreditNote1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new credit note 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new CreditNote1());
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
    public function number(?string $value): self
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
     * Sets issue date field.
     */
    public function issueDate(?string $value): self
    {
        $this->instance->setIssueDate($value);
        return $this;
    }

    /**
     * Sets applied date field.
     */
    public function appliedDate(?string $value): self
    {
        $this->instance->setAppliedDate($value);
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
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
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
     * Sets seller field.
     */
    public function seller(?Seller $value): self
    {
        $this->instance->setSeller($value);
        return $this;
    }

    /**
     * Sets customer field.
     */
    public function customer(?Customer1 $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?BillingAddress $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets shipping address field.
     */
    public function shippingAddress(?ShippingAddress $value): self
    {
        $this->instance->setShippingAddress($value);
        return $this;
    }

    /**
     * Sets subtotal amount field.
     */
    public function subtotalAmount(?string $value): self
    {
        $this->instance->setSubtotalAmount($value);
        return $this;
    }

    /**
     * Sets discount amount field.
     */
    public function discountAmount(?string $value): self
    {
        $this->instance->setDiscountAmount($value);
        return $this;
    }

    /**
     * Sets tax amount field.
     */
    public function taxAmount(?string $value): self
    {
        $this->instance->setTaxAmount($value);
        return $this;
    }

    /**
     * Sets total amount field.
     */
    public function totalAmount(?string $value): self
    {
        $this->instance->setTotalAmount($value);
        return $this;
    }

    /**
     * Sets applied amount field.
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
        return $this;
    }

    /**
     * Sets remaining amount field.
     */
    public function remainingAmount(?string $value): self
    {
        $this->instance->setRemainingAmount($value);
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
     * Sets applications field.
     */
    public function applications(?array $value): self
    {
        $this->instance->setApplications($value);
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
     * Sets origin invoices field.
     */
    public function originInvoices(?array $value): self
    {
        $this->instance->setOriginInvoices($value);
        return $this;
    }

    /**
     * Initializes a new credit note 1 object.
     */
    public function build(): CreditNote1
    {
        return CoreHelper::clone($this->instance);
    }
}
