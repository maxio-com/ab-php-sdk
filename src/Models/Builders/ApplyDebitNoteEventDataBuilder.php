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
    public static function init(
        string $debitNoteNumber,
        string $debitNoteUid,
        string $originalAmount,
        string $appliedAmount
    ): self {
        return new self(
            new ApplyDebitNoteEventData($debitNoteNumber, $debitNoteUid, $originalAmount, $appliedAmount)
        );
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
     * Initializes a new apply debit note event data object.
     */
    public function build(): ApplyDebitNoteEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
