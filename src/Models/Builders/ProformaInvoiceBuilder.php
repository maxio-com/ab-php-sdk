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
use AdvancedBillingLib\Models\InvoiceCustomField;
use AdvancedBillingLib\Models\InvoiceLineItem;
use AdvancedBillingLib\Models\InvoiceSeller;
use AdvancedBillingLib\Models\ProformaInvoice;
use AdvancedBillingLib\Models\ProformaInvoiceCredit;
use AdvancedBillingLib\Models\ProformaInvoiceDiscount;
use AdvancedBillingLib\Models\ProformaInvoicePayment;
use AdvancedBillingLib\Models\ProformaInvoiceTax;
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
     * Initializes a new Proforma Invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoice());
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
     * Unsets customer id field.
     */
    public function unsetCustomerId(): self
    {
        $this->instance->unsetCustomerId();
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
     * Unsets subscription id field.
     */
    public function unsetSubscriptionId(): self
    {
        $this->instance->unsetSubscriptionId();
        return $this;
    }

    /**
     * Sets number field.
     *
     * @param int|null $value
     */
    public function number(?int $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Unsets number field.
     */
    public function unsetNumber(): self
    {
        $this->instance->unsetNumber();
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
     * Unsets sequence number field.
     */
    public function unsetSequenceNumber(): self
    {
        $this->instance->unsetSequenceNumber();
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets delivery date field.
     *
     * @param \DateTime|null $value
     */
    public function deliveryDate(?\DateTime $value): self
    {
        $this->instance->setDeliveryDate($value);
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
     * Sets collection method field.
     *
     * @param string|null $value
     */
    public function collectionMethod(?string $value): self
    {
        $this->instance->setCollectionMethod($value);
        return $this;
    }

    /**
     * Sets payment instructions field.
     *
     * @param string|null $value
     */
    public function paymentInstructions(?string $value): self
    {
        $this->instance->setPaymentInstructions($value);
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
     * Sets consolidation level field.
     *
     * @param string|null $value
     */
    public function consolidationLevel(?string $value): self
    {
        $this->instance->setConsolidationLevel($value);
        return $this;
    }

    /**
     * Sets product name field.
     *
     * @param string|null $value
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
        return $this;
    }

    /**
     * Sets product family name field.
     *
     * @param string|null $value
     */
    public function productFamilyName(?string $value): self
    {
        $this->instance->setProductFamilyName($value);
        return $this;
    }

    /**
     * Sets role field.
     *
     * @param string|null $value
     */
    public function role(?string $value): self
    {
        $this->instance->setRole($value);
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
     * Sets credit amount field.
     *
     * @param string|null $value
     */
    public function creditAmount(?string $value): self
    {
        $this->instance->setCreditAmount($value);
        return $this;
    }

    /**
     * Sets paid amount field.
     *
     * @param string|null $value
     */
    public function paidAmount(?string $value): self
    {
        $this->instance->setPaidAmount($value);
        return $this;
    }

    /**
     * Sets refund amount field.
     *
     * @param string|null $value
     */
    public function refundAmount(?string $value): self
    {
        $this->instance->setRefundAmount($value);
        return $this;
    }

    /**
     * Sets due amount field.
     *
     * @param string|null $value
     */
    public function dueAmount(?string $value): self
    {
        $this->instance->setDueAmount($value);
        return $this;
    }

    /**
     * Sets line items field.
     *
     * @param InvoiceLineItem[]|null $value
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Sets discounts field.
     *
     * @param ProformaInvoiceDiscount[]|null $value
     */
    public function discounts(?array $value): self
    {
        $this->instance->setDiscounts($value);
        return $this;
    }

    /**
     * Sets taxes field.
     *
     * @param ProformaInvoiceTax[]|null $value
     */
    public function taxes(?array $value): self
    {
        $this->instance->setTaxes($value);
        return $this;
    }

    /**
     * Sets credits field.
     *
     * @param ProformaInvoiceCredit[]|null $value
     */
    public function credits(?array $value): self
    {
        $this->instance->setCredits($value);
        return $this;
    }

    /**
     * Sets payments field.
     *
     * @param ProformaInvoicePayment[]|null $value
     */
    public function payments(?array $value): self
    {
        $this->instance->setPayments($value);
        return $this;
    }

    /**
     * Sets custom fields field.
     *
     * @param InvoiceCustomField[]|null $value
     */
    public function customFields(?array $value): self
    {
        $this->instance->setCustomFields($value);
        return $this;
    }

    /**
     * Sets public url field.
     *
     * @param string|null $value
     */
    public function publicUrl(?string $value): self
    {
        $this->instance->setPublicUrl($value);
        return $this;
    }

    /**
     * Unsets public url field.
     */
    public function unsetPublicUrl(): self
    {
        $this->instance->unsetPublicUrl();
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
     * Initializes a new Proforma Invoice object.
     */
    public function build(): ProformaInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
