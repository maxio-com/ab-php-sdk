<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyCreditNoteEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ApplyCreditNoteEventData
 *
 * @see ApplyCreditNoteEventData
 */
class ApplyCreditNoteEventDataBuilder
{
    /**
     * @var ApplyCreditNoteEventData
     */
    private $instance;

    private function __construct(ApplyCreditNoteEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apply credit note event data Builder object.
     */
    public static function init(): self
    {
        return new self(new ApplyCreditNoteEventData());
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
     * Initializes a new apply credit note event data object.
     */
    public function build(): ApplyCreditNoteEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
