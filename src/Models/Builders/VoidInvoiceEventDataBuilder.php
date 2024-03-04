<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\VoidInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidInvoiceEventData
 *
 * @see VoidInvoiceEventData
 */
class VoidInvoiceEventDataBuilder
{
    /**
     * @var VoidInvoiceEventData
     */
    private $instance;

    private function __construct(VoidInvoiceEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new void invoice event data Builder object.
     */
    public static function init(bool $isAdvanceInvoice, string $reason): self
    {
        return new self(new VoidInvoiceEventData($isAdvanceInvoice, $reason));
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
     * Initializes a new void invoice event data object.
     */
    public function build(): VoidInvoiceEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
