<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceTaxComponentBreakout;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceTaxComponentBreakout
 *
 * @see InvoiceTaxComponentBreakout
 */
class InvoiceTaxComponentBreakoutBuilder
{
    /**
     * @var InvoiceTaxComponentBreakout
     */
    private $instance;

    private function __construct(InvoiceTaxComponentBreakout $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Invoice Tax Component Breakout Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceTaxComponentBreakout());
    }

    /**
     * Sets tax rule id field.
     *
     * @param int|null $value
     */
    public function taxRuleId(?int $value): self
    {
        $this->instance->setTaxRuleId($value);
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
     * Sets country code field.
     *
     * @param string|null $value
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Sets subdivision code field.
     *
     * @param string|null $value
     */
    public function subdivisionCode(?string $value): self
    {
        $this->instance->setSubdivisionCode($value);
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
     * Sets non taxable amount field.
     *
     * @param string|null $value
     */
    public function nonTaxableAmount(?string $value): self
    {
        $this->instance->setNonTaxableAmount($value);
        return $this;
    }

    /**
     * Sets tax name field.
     *
     * @param string|null $value
     */
    public function taxName(?string $value): self
    {
        $this->instance->setTaxName($value);
        return $this;
    }

    /**
     * Sets tax type field.
     *
     * @param string|null $value
     */
    public function taxType(?string $value): self
    {
        $this->instance->setTaxType($value);
        return $this;
    }

    /**
     * Sets rate type field.
     *
     * @param string|null $value
     */
    public function rateType(?string $value): self
    {
        $this->instance->setRateType($value);
        return $this;
    }

    /**
     * Sets tax authority type field.
     *
     * @param int|null $value
     */
    public function taxAuthorityType(?int $value): self
    {
        $this->instance->setTaxAuthorityType($value);
        return $this;
    }

    /**
     * Sets state assigned no field.
     *
     * @param string|null $value
     */
    public function stateAssignedNo(?string $value): self
    {
        $this->instance->setStateAssignedNo($value);
        return $this;
    }

    /**
     * Sets tax sub type field.
     *
     * @param string|null $value
     */
    public function taxSubType(?string $value): self
    {
        $this->instance->setTaxSubType($value);
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
     * Initializes a new Invoice Tax Component Breakout object.
     */
    public function build(): InvoiceTaxComponentBreakout
    {
        return CoreHelper::clone($this->instance);
    }
}
