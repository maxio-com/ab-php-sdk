<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AppliedCreditNoteData;
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
     * Initializes a new Apply Credit Note Event Data Builder object.
     *
     * @param string $uid
     * @param string $creditNoteNumber
     * @param string $creditNoteUid
     * @param string $originalAmount
     * @param string $appliedAmount
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
     *
     * @param \DateTime|null $value
     */
    public function transactionTime(?\DateTime $value): self
    {
        $this->instance->setTransactionTime($value);
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
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
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
     * Sets consolidated invoice field.
     *
     * @param bool|null $value
     */
    public function consolidatedInvoice(?bool $value): self
    {
        $this->instance->setConsolidatedInvoice($value);
        return $this;
    }

    /**
     * Sets applied credit notes field.
     *
     * @param AppliedCreditNoteData[]|null $value
     */
    public function appliedCreditNotes(?array $value): self
    {
        $this->instance->setAppliedCreditNotes($value);
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
     * Initializes a new Apply Credit Note Event Data object.
     */
    public function build(): ApplyCreditNoteEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
