<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote1;
use AdvancedBillingLib\Models\InvoiceEvent1;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceEvent1
 *
 * @see InvoiceEvent1
 */
class InvoiceEvent1Builder
{
    /**
     * @var InvoiceEvent1
     */
    private $instance;

    private function __construct(InvoiceEvent1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice event 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceEvent1());
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
     * Sets prepayment field.
     */
    public function prepayment(?bool $value): self
    {
        $this->instance->setPrepayment($value);
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
     * Initializes a new invoice event 1 object.
     */
    public function build(): InvoiceEvent1
    {
        return CoreHelper::clone($this->instance);
    }
}
