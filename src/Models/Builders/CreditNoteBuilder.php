<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\CreditNoteApplication;
use AdvancedBillingLib\Models\CreditNoteLineItem;
use AdvancedBillingLib\Models\InvoiceAddress;
use AdvancedBillingLib\Models\InvoiceCustomer;
use AdvancedBillingLib\Models\InvoiceDiscount;
use AdvancedBillingLib\Models\InvoiceRefund;
use AdvancedBillingLib\Models\InvoiceSeller;
use AdvancedBillingLib\Models\InvoiceTax;
use AdvancedBillingLib\Models\OriginInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditNote
 *
 * @see CreditNote
 */
class CreditNoteBuilder
{
    /**
     * @var CreditNote
     */
    private $instance;

    private function __construct(CreditNote $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Credit Note Builder object.
     */
    public static function init(): self
    {
        return new self(new CreditNote());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets site id field.
     *
     * @param int|null $value
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
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
     * Sets number field.
     *
     * @param string|null $value
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Sets sequence number field.
     *
     * @param int|null $value
     */
    public function sequenceNumber(?int $value): self
    {
        $this->instance->setSequenceNumber($value);
        return $this;
    }

    /**
     * Sets issue date field.
     *
     * @param \DateTime|null $value
     */
    public function issueDate(?\DateTime $value): self
    {
        $this->instance->setIssueDate($value);
        return $this;
    }

    /**
     * Sets applied date field.
     *
     * @param \DateTime|null $value
     */
    public function appliedDate(?\DateTime $value): self
    {
        $this->instance->setAppliedDate($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets seller field.
     *
     * @param InvoiceSeller|null $value
     */
    public function seller(?InvoiceSeller $value): self
    {
        $this->instance->setSeller($value);
        return $this;
    }

    /**
     * Sets customer field.
     *
     * @param InvoiceCustomer|null $value
     */
    public function customer(?InvoiceCustomer $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets billing address field.
     *
     * @param InvoiceAddress|null $value
     */
    public function billingAddress(?InvoiceAddress $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets shipping address field.
     *
     * @param InvoiceAddress|null $value
     */
    public function shippingAddress(?InvoiceAddress $value): self
    {
        $this->instance->setShippingAddress($value);
        return $this;
    }

    /**
     * Sets subtotal amount field.
     *
     * @param string|null $value
     */
    public function subtotalAmount(?string $value): self
    {
        $this->instance->setSubtotalAmount($value);
        return $this;
    }

    /**
     * Sets discount amount field.
     *
     * @param string|null $value
     */
    public function discountAmount(?string $value): self
    {
        $this->instance->setDiscountAmount($value);
        return $this;
    }

    /**
     * Sets tax amount field.
     *
     * @param string|null $value
     */
    public function taxAmount(?string $value): self
    {
        $this->instance->setTaxAmount($value);
        return $this;
    }

    /**
     * Sets total amount field.
     *
     * @param string|null $value
     */
    public function totalAmount(?string $value): self
    {
        $this->instance->setTotalAmount($value);
        return $this;
    }

    /**
     * Sets applied amount field.
     *
     * @param string|null $value
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
        return $this;
    }

    /**
     * Sets remaining amount field.
     *
     * @param string|null $value
     */
    public function remainingAmount(?string $value): self
    {
        $this->instance->setRemainingAmount($value);
        return $this;
    }

    /**
     * Sets line items field.
     *
     * @param CreditNoteLineItem[]|null $value
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Sets discounts field.
     *
     * @param InvoiceDiscount[]|null $value
     */
    public function discounts(?array $value): self
    {
        $this->instance->setDiscounts($value);
        return $this;
    }

    /**
     * Sets taxes field.
     *
     * @param InvoiceTax[]|null $value
     */
    public function taxes(?array $value): self
    {
        $this->instance->setTaxes($value);
        return $this;
    }

    /**
     * Sets applications field.
     *
     * @param CreditNoteApplication[]|null $value
     */
    public function applications(?array $value): self
    {
        $this->instance->setApplications($value);
        return $this;
    }

    /**
     * Sets refunds field.
     *
     * @param InvoiceRefund[]|null $value
     */
    public function refunds(?array $value): self
    {
        $this->instance->setRefunds($value);
        return $this;
    }

    /**
     * Sets origin invoices field.
     *
     * @param OriginInvoice[]|null $value
     */
    public function originInvoices(?array $value): self
    {
        $this->instance->setOriginInvoices($value);
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
     * Initializes a new Credit Note object.
     */
    public function build(): CreditNote
    {
        return CoreHelper::clone($this->instance);
    }
}
