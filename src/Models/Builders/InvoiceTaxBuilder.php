<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceTax;
use AdvancedBillingLib\Models\InvoiceTaxBreakout;
use AdvancedBillingLib\Models\InvoiceTaxComponentBreakout;
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
     * Initializes a new Invoice Tax Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceTax());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets title field.
     *
     * @param string|null $value
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
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
     *
     * @param string|null $value
     */
    public function sourceType(?string $value): self
    {
        $this->instance->setSourceType($value);
        return $this;
    }

    /**
     * Sets source id field.
     *
     * @param int|null $value
     */
    public function sourceId(?int $value): self
    {
        $this->instance->setSourceId($value);
        return $this;
    }

    /**
     * Sets percentage field.
     *
     * @param string|null $value
     */
    public function percentage(?string $value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Sets taxable amount field.
     *
     * @param string|null $value
     */
    public function taxableAmount(?string $value): self
    {
        $this->instance->setTaxableAmount($value);
        return $this;
    }

    /**
     * Sets tax amount field.
     *
     * @param string|null $value
     */
    public function taxAmount(?string $value): self
    {
        $this->instance->setTaxAmount($value);
        return $this;
    }

    /**
     * Sets transaction id field.
     *
     * @param int|null $value
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Sets line item breakouts field.
     *
     * @param InvoiceTaxBreakout[]|null $value
     */
    public function lineItemBreakouts(?array $value): self
    {
        $this->instance->setLineItemBreakouts($value);
        return $this;
    }

    /**
     * Sets tax component breakouts field.
     *
     * @param InvoiceTaxComponentBreakout[]|null $value
     */
    public function taxComponentBreakouts(?array $value): self
    {
        $this->instance->setTaxComponentBreakouts($value);
        return $this;
    }

    /**
     * Sets eu vat field.
     *
     * @param bool|null $value
     */
    public function euVat(?bool $value): self
    {
        $this->instance->setEuVat($value);
        return $this;
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets tax exempt amount field.
     *
     * @param string|null $value
     */
    public function taxExemptAmount(?string $value): self
    {
        $this->instance->setTaxExemptAmount($value);
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
     * Initializes a new Invoice Tax object.
     */
    public function build(): InvoiceTax
    {
        return CoreHelper::clone($this->instance);
    }
}
