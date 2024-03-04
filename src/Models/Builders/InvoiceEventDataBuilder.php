<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote1;
use AdvancedBillingLib\Models\InvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceEventData
 *
 * @see InvoiceEventData
 */
class InvoiceEventDataBuilder
{
    /**
     * @var InvoiceEventData
     */
    private $instance;

    private function __construct(InvoiceEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice event data Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceEventData());
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
     * Sets credit note number field.
     */
    public function creditNoteNumber(?string $value): self
    {
        $this->instance->setCreditNoteNumber($value);
        return $this;
    }

    /**
     * Sets credit note uid field.
     */
    public function creditNoteUid(?string $value): self
    {
        $this->instance->setCreditNoteUid($value);
        return $this;
    }

    /**
     * Sets original amount field.
     */
    public function originalAmount(?string $value): self
    {
        $this->instance->setOriginalAmount($value);
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
     * Sets transaction time field.
     */
    public function transactionTime(?\DateTime $value): self
    {
        $this->instance->setTransactionTime($value);
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
     * Sets debit note number field.
     */
    public function debitNoteNumber(?string $value): self
    {
        $this->instance->setDebitNoteNumber($value);
        return $this;
    }

    /**
     * Sets debit note uid field.
     */
    public function debitNoteUid(?string $value): self
    {
        $this->instance->setDebitNoteUid($value);
        return $this;
    }

    /**
     * Sets payment method field.
     */
    public function paymentMethod($value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
    }

    /**
     * Sets transaction id field.
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
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
     * Sets prepayment field.
     */
    public function prepayment(?bool $value): self
    {
        $this->instance->setPrepayment($value);
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
     * Sets from collection method field.
     */
    public function fromCollectionMethod(?string $value): self
    {
        $this->instance->setFromCollectionMethod($value);
        return $this;
    }

    /**
     * Sets to collection method field.
     */
    public function toCollectionMethod(?string $value): self
    {
        $this->instance->setToCollectionMethod($value);
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
     * Sets from status field.
     */
    public function fromStatus(?string $value): self
    {
        $this->instance->setFromStatus($value);
        return $this;
    }

    /**
     * Sets to status field.
     */
    public function toStatus(?string $value): self
    {
        $this->instance->setToStatus($value);
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
     * Sets total amount field.
     */
    public function totalAmount(?string $value): self
    {
        $this->instance->setTotalAmount($value);
        return $this;
    }

    /**
     * Sets apply credit field.
     */
    public function applyCredit(?bool $value): self
    {
        $this->instance->setApplyCredit($value);
        return $this;
    }

    /**
     * Sets credit note attributes field.
     */
    public function creditNoteAttributes(?CreditNote1 $value): self
    {
        $this->instance->setCreditNoteAttributes($value);
        return $this;
    }

    /**
     * Sets payment id field.
     */
    public function paymentId(?int $value): self
    {
        $this->instance->setPaymentId($value);
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
     * Sets refund id field.
     */
    public function refundId(?int $value): self
    {
        $this->instance->setRefundId($value);
        return $this;
    }

    /**
     * Sets is advance invoice field.
     */
    public function isAdvanceInvoice(?bool $value): self
    {
        $this->instance->setIsAdvanceInvoice($value);
        return $this;
    }

    /**
     * Sets reason field.
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
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
     * Initializes a new invoice event data object.
     */
    public function build(): InvoiceEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
