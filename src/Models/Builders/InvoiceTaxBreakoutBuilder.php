<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceTaxBreakout;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceTaxBreakout
 *
 * @see InvoiceTaxBreakout
 */
class InvoiceTaxBreakoutBuilder
{
    /**
     * @var InvoiceTaxBreakout
     */
    private $instance;

    private function __construct(InvoiceTaxBreakout $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice tax breakout Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceTaxBreakout());
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
     * Initializes a new invoice tax breakout object.
     */
    public function build(): InvoiceTaxBreakout
    {
        return CoreHelper::clone($this->instance);
    }
}
