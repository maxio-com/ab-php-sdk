<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\RefundInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundInvoiceEventData
 *
 * @see RefundInvoiceEventData
 */
class RefundInvoiceEventDataBuilder
{
    /**
     * @var RefundInvoiceEventData
     */
    private $instance;

    private function __construct(RefundInvoiceEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund invoice event data Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundInvoiceEventData());
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
     * Sets consolidation level field.
     */
    public function consolidationLevel(?string $value): self
    {
        $this->instance->setConsolidationLevel($value);
        return $this;
    }

    /**
     * Sets credit note attributes field.
     */
    public function creditNoteAttributes(?CreditNote $value): self
    {
        $this->instance->setCreditNoteAttributes($value);
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
     * Sets original amount field.
     */
    public function originalAmount(?string $value): self
    {
        $this->instance->setOriginalAmount($value);
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
     * Sets transaction time field.
     */
    public function transactionTime(?\DateTime $value): self
    {
        $this->instance->setTransactionTime($value);
        return $this;
    }

    /**
     * Initializes a new refund invoice event data object.
     */
    public function build(): RefundInvoiceEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
