<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\VoidRemainderEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidRemainderEventData
 *
 * @see VoidRemainderEventData
 */
class VoidRemainderEventDataBuilder
{
    /**
     * @var VoidRemainderEventData
     */
    private $instance;

    private function __construct(VoidRemainderEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Void Remainder Event Data Builder object.
     *
     * @param CreditNote $creditNoteAttributes
     * @param string $memo
     * @param string $appliedAmount
     * @param \DateTime $transactionTime
     */
    public static function init(
        CreditNote $creditNoteAttributes,
        string $memo,
        string $appliedAmount,
        \DateTime $transactionTime
    ): self {
        return new self(new VoidRemainderEventData($creditNoteAttributes, $memo, $appliedAmount, $transactionTime));
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
     * Initializes a new Void Remainder Event Data object.
     */
    public function build(): VoidRemainderEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
