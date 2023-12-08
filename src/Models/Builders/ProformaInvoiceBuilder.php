<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceAddress;
use AdvancedBillingLib\Models\InvoiceCustomer;
use AdvancedBillingLib\Models\InvoiceSeller;
use AdvancedBillingLib\Models\ProformaInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaInvoice
 *
 * @see ProformaInvoice
 */
class ProformaInvoiceBuilder
{
    /**
     * @var ProformaInvoice
     */
    private $instance;

    private function __construct(ProformaInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new proforma invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoice());
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
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets delivery date field.
     */
    public function deliveryDate(?string $value): self
    {
        $this->instance->setDeliveryDate($value);
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
     * Sets collection method field.
     */
    public function collectionMethod(?string $value): self
    {
        $this->instance->setCollectionMethod($value);
        return $this;
    }

    /**
     * Sets payment instructions field.
     */
    public function paymentInstructions(?string $value): self
    {
        $this->instance->setPaymentInstructions($value);
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
     * Sets consolidation level field.
     */
    public function consolidationLevel(?string $value): self
    {
        $this->instance->setConsolidationLevel($value);
        return $this;
    }

    /**
     * Sets product name field.
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
        return $this;
    }

    /**
     * Sets product family name field.
     */
    public function productFamilyName(?string $value): self
    {
        $this->instance->setProductFamilyName($value);
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
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
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
     * Sets credit amount field.
     */
    public function creditAmount(?string $value): self
    {
        $this->instance->setCreditAmount($value);
        return $this;
    }

    /**
     * Sets paid amount field.
     */
    public function paidAmount(?string $value): self
    {
        $this->instance->setPaidAmount($value);
        return $this;
    }

    /**
     * Sets refund amount field.
     */
    public function refundAmount(?string $value): self
    {
        $this->instance->setRefundAmount($value);
        return $this;
    }

    /**
     * Sets due amount field.
     */
    public function dueAmount(?string $value): self
    {
        $this->instance->setDueAmount($value);
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
     * Sets credits field.
     */
    public function credits(?array $value): self
    {
        $this->instance->setCredits($value);
        return $this;
    }

    /**
     * Sets payments field.
     */
    public function payments(?array $value): self
    {
        $this->instance->setPayments($value);
        return $this;
    }

    /**
     * Sets custom fields field.
     */
    public function customFields(?array $value): self
    {
        $this->instance->setCustomFields($value);
        return $this;
    }

    /**
     * Sets public url field.
     */
    public function publicUrl(?string $value): self
    {
        $this->instance->setPublicUrl($value);
        return $this;
    }

    /**
     * Initializes a new proforma invoice object.
     */
    public function build(): ProformaInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
