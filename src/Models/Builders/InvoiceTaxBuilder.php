<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceTax;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceTax
 *
 * @see InvoiceTax
 */
class InvoiceTaxBuilder
{
    /**
     * @var InvoiceTax
     */
    private $instance;

    private function __construct(InvoiceTax $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice tax Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceTax());
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
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets source type field.
     */
    public function sourceType(?string $value): self
    {
        $this->instance->setSourceType($value);
        return $this;
    }

    /**
     * Sets source id field.
     */
    public function sourceId(?int $value): self
    {
        $this->instance->setSourceId($value);
        return $this;
    }

    /**
     * Sets percentage field.
     */
    public function percentage(?string $value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Sets taxable amount field.
     */
    public function taxableAmount(?string $value): self
    {
        $this->instance->setTaxableAmount($value);
        return $this;
    }

    /**
     * Sets tax amount field.
     */
    public function taxAmount(?string $value): self
    {
        $this->instance->setTaxAmount($value);
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
     * Sets line item breakouts field.
     */
    public function lineItemBreakouts(?array $value): self
    {
        $this->instance->setLineItemBreakouts($value);
        return $this;
    }

    /**
     * Sets tax component breakouts field.
     */
    public function taxComponentBreakouts(?array $value): self
    {
        $this->instance->setTaxComponentBreakouts($value);
        return $this;
    }

    /**
     * Initializes a new invoice tax object.
     */
    public function build(): InvoiceTax
    {
        return CoreHelper::clone($this->instance);
    }
}
