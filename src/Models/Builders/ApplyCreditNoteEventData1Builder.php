<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyCreditNoteEventData1;
use AdvancedBillingLib\Models\BillingAddress;
use AdvancedBillingLib\Models\CreditNote1;
use AdvancedBillingLib\Models\InvoiceCustomer;
use AdvancedBillingLib\Models\InvoiceDisplaySettings;
use AdvancedBillingLib\Models\InvoicePayer;
use AdvancedBillingLib\Models\InvoicePreviousBalance;
use AdvancedBillingLib\Models\InvoiceSeller;
use AdvancedBillingLib\Models\ShippingAddress;
use Core\Utils\CoreHelper;

/**
 * Builder for model ApplyCreditNoteEventData1
 *
 * @see ApplyCreditNoteEventData1
 */
class ApplyCreditNoteEventData1Builder
{
    /**
     * @var ApplyCreditNoteEventData1
     */
    private $instance;

    private function __construct(ApplyCreditNoteEventData1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apply credit note event data 1 Builder object.
     */
    public static function init(
        string $uid,
        string $creditNoteNumber,
        string $creditNoteUid,
        string $originalAmount,
        string $appliedAmount,
        \DateTime $transactionTime,
        string $debitNoteNumber,
        string $debitNoteUid,
        string $consolidationLevel,
        $paymentMethod,
        int $transactionId,
        bool $prepayment,
        string $totalAmount,
        string $refundAmount,
        string $dueAmount,
        string $chargebackStatus,
        string $fromCollectionMethod,
        string $toCollectionMethod,
        array $fromStatus,
        array $toStatus,
        int $amountInCents,
        bool $applyCredit,
        CreditNote1 $creditNoteAttributes,
        int $paymentId,
        int $refundId,
        bool $isAdvanceInvoice,
        string $reason
    ): self {
        return new self(new ApplyCreditNoteEventData1(
            $uid,
            $creditNoteNumber,
            $creditNoteUid,
            $originalAmount,
            $appliedAmount,
            $transactionTime,
            $debitNoteNumber,
            $debitNoteUid,
            $consolidationLevel,
            $paymentMethod,
            $transactionId,
            $prepayment,
            $totalAmount,
            $refundAmount,
            $dueAmount,
            $chargebackStatus,
            $fromCollectionMethod,
            $toCollectionMethod,
            $fromStatus,
            $toStatus,
            $amountInCents,
            $applyCredit,
            $creditNoteAttributes,
            $paymentId,
            $refundId,
            $isAdvanceInvoice,
            $reason
        ));
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
     * Sets consolidated invoice field.
     */
    public function consolidatedInvoice(?bool $value): self
    {
        $this->instance->setConsolidatedInvoice($value);
        return $this;
    }

    /**
     * Sets applied credit notes field.
     */
    public function appliedCreditNotes(?array $value): self
    {
        $this->instance->setAppliedCreditNotes($value);
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
     * Sets remaining prepayment amount field.
     */
    public function remainingPrepaymentAmount(?string $value): self
    {
        $this->instance->setRemainingPrepaymentAmount($value);
        return $this;
    }

    /**
     * Unsets remaining prepayment amount field.
     */
    public function unsetRemainingPrepaymentAmount(): self
    {
        $this->instance->unsetRemainingPrepaymentAmount();
        return $this;
    }

    /**
     * Sets external field.
     */
    public function external(?bool $value): self
    {
        $this->instance->setExternal($value);
        return $this;
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
    public function issueDate(?\DateTime $value): self
    {
        $this->instance->setIssueDate($value);
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
     * Sets paid date field.
     */
    public function paidDate(?\DateTime $value): self
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
     * Sets gateway trans id field.
     */
    public function gatewayTransId(?string $value): self
    {
        $this->instance->setGatewayTransId($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
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
     * Sets remaining amount field.
     */
    public function remainingAmount(?string $value): self
    {
        $this->instance->setRemainingAmount($value);
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
     * Sets origin invoices field.
     */
    public function originInvoices(?array $value): self
    {
        $this->instance->setOriginInvoices($value);
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
     * Initializes a new apply credit note event data 1 object.
     */
    public function build(): ApplyCreditNoteEventData1
    {
        return CoreHelper::clone($this->instance);
    }
}
