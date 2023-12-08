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
     * Initializes a new invoice tax component breakout Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceTaxComponentBreakout());
    }

    /**
     * Sets tax rule id field.
     */
    public function taxRuleId(?int $value): self
    {
        $this->instance->setTaxRuleId($value);
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
     * Sets country code field.
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Sets subdivision code field.
     */
    public function subdivisionCode(?string $value): self
    {
        $this->instance->setSubdivisionCode($value);
        return $this;
    }

    /**
     * Initializes a new invoice tax component breakout object.
     */
    public function build(): InvoiceTaxComponentBreakout
    {
        return CoreHelper::clone($this->instance);
    }
}
