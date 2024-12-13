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
     * Initializes a new Void Invoice Event Data Builder object.
     *
     * @param bool $isAdvanceInvoice
     * @param string $reason
     */
    public static function init(bool $isAdvanceInvoice, string $reason): self
    {
        return new self(new VoidInvoiceEventData($isAdvanceInvoice, $reason));
    }

    /**
     * Sets credit note attributes field.
     *
     * @param CreditNote|null $value
     */
    public function creditNoteAttributes(?CreditNote $value): self
    {
        $this->instance->setCreditNoteAttributes($value);
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
     * Sets applied amount field.
     *
     * @param string|null $value
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
        return $this;
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
     * Initializes a new Void Invoice Event Data object.
     */
    public function build(): VoidInvoiceEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
