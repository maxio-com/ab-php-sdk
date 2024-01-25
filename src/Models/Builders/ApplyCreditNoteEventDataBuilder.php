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
    public static function init(
        string $uid,
        string $creditNoteNumber,
        string $creditNoteUid,
        string $originalAmount,
        string $appliedAmount
    ): self {
        return new self(
            new ApplyCreditNoteEventData($uid, $creditNoteNumber, $creditNoteUid, $originalAmount, $appliedAmount)
        );
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
