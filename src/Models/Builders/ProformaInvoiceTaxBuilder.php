<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceTaxBreakout;
use AdvancedBillingLib\Models\ProformaInvoiceTax;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaInvoiceTax
 *
 * @see ProformaInvoiceTax
 */
class ProformaInvoiceTaxBuilder
{
    /**
     * @var ProformaInvoiceTax
     */
    private $instance;

    private function __construct(ProformaInvoiceTax $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Proforma Invoice Tax Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoiceTax());
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
     * Initializes a new Proforma Invoice Tax object.
     */
    public function build(): ProformaInvoiceTax
    {
        return CoreHelper::clone($this->instance);
    }
}
