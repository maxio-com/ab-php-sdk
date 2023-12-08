<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\InvoiceAddress;
use AdvancedBillingLib\Models\InvoiceCustomer;
use AdvancedBillingLib\Models\InvoiceDisplaySettings;
use AdvancedBillingLib\Models\InvoicePayer;
use AdvancedBillingLib\Models\InvoicePreviousBalance;
use AdvancedBillingLib\Models\InvoiceSeller;
use Core\Utils\CoreHelper;

/**
 * Builder for model Invoice
 *
 * @see Invoice
 */
class InvoiceBuilder
{
    /**
     * @var Invoice
     */
    private $instance;

    private function __construct(Invoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new Invoice());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
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
     * Sets transaction time field.
     */
    public function transactionTime(?\DateTime $value): self
    {
        $this->instance->setTransactionTime($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
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
     * Sets due date field.
     */
    public function dueDate(?string $value): self
    {
        $this->instance->setDueDate($value);
        return $this;
    }

    /**
     * Sets paid date field.
     */
    public function paidDate(?string $value): self
    {
        $this->instance->setPaidDate($value);
        return $this;
    }

    /**
     * Unsets paid date field.
     */
    public function unsetPaidDate(): self
    {
        $this->instance->unsetPaidDate();
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
     * Sets role field.
     */
    public function role(?string $value): self
    {
        $this->instance->setRole($value);
        return $this;
    }

    /**
     * Sets parent invoice id field.
     */
    public function parentInvoiceId(?int $value): self
    {
        $this->instance->setParentInvoiceId($value);
        return $this;
    }

    /**
     * Unsets parent invoice id field.
     */
    public function unsetParentInvoiceId(): self
    {
        $this->instance->unsetParentInvoiceId();
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
     * Sets parent invoice uid field.
     */
    public function parentInvoiceUid(?string $value): self
    {
        $this->instance->setParentInvoiceUid($value);
        return $this;
    }

    /**
     * Unsets parent invoice uid field.
     */
    public function unsetParentInvoiceUid(): self
    {
        $this->instance->unsetParentInvoiceUid();
        return $this;
    }

    /**
     * Sets subscription group id field.
     */
    public function subscriptionGroupId(?int $value): self
    {
        $this->instance->setSubscriptionGroupId($value);
        return $this;
    }

    /**
     * Unsets subscription group id field.
     */
    public function unsetSubscriptionGroupId(): self
    {
        $this->instance->unsetSubscriptionGroupId();
        return $this;
    }

    /**
     * Sets parent invoice number field.
     */
    public function parentInvoiceNumber(?int $value): self
    {
        $this->instance->setParentInvoiceNumber($value);
        return $this;
    }

    /**
     * Unsets parent invoice number field.
     */
    public function unsetParentInvoiceNumber(): self
    {
        $this->instance->unsetParentInvoiceNumber();
        return $this;
    }

    /**
     * Sets group primary subscription id field.
     */
    public function groupPrimarySubscriptionId(?int $value): self
    {
        $this->instance->setGroupPrimarySubscriptionId($value);
        return $this;
    }

    /**
     * Unsets group primary subscription id field.
     */
    public function unsetGroupPrimarySubscriptionId(): self
    {
        $this->instance->unsetGroupPrimarySubscriptionId();
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
     * Sets payer field.
     */
    public function payer(?InvoicePayer $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Sets recipient emails field.
     */
    public function recipientEmails(?array $value): self
    {
        $this->instance->setRecipientEmails($value);
        return $this;
    }

    /**
     * Sets net terms field.
     */
    public function netTerms(?int $value): self
    {
        $this->instance->setNetTerms($value);
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
     * Sets refund amount field.
     */
    public function refundAmount(?string $value): self
    {
        $this->instance->setRefundAmount($value);
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
     * Sets refunds field.
     */
    public function refunds(?array $value): self
    {
        $this->instance->setRefunds($value);
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
     * Sets display settings field.
     */
    public function displaySettings(?InvoiceDisplaySettings $value): self
    {
        $this->instance->setDisplaySettings($value);
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
     * Sets previous balance data field.
     */
    public function previousBalanceData(?InvoicePreviousBalance $value): self
    {
        $this->instance->setPreviousBalanceData($value);
        return $this;
    }

    /**
     * Initializes a new invoice object.
     */
    public function build(): Invoice
    {
        return CoreHelper::clone($this->instance);
    }
}
