<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyDebitNoteEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ApplyDebitNoteEventData
 *
 * @see ApplyDebitNoteEventData
 */
class ApplyDebitNoteEventDataBuilder
{
    /**
     * @var ApplyDebitNoteEventData
     */
    private $instance;

    private function __construct(ApplyDebitNoteEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apply debit note event data Builder object.
     */
    public static function init(): self
    {
        return new self(new ApplyDebitNoteEventData());
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
     * Initializes a new apply debit note event data object.
     */
    public function build(): ApplyDebitNoteEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
