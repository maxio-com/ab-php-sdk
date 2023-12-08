<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProformaInvoiceTaxBreakout;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaInvoiceTaxBreakout
 *
 * @see ProformaInvoiceTaxBreakout
 */
class ProformaInvoiceTaxBreakoutBuilder
{
    /**
     * @var ProformaInvoiceTaxBreakout
     */
    private $instance;

    private function __construct(ProformaInvoiceTaxBreakout $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new proforma invoice tax breakout Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoiceTaxBreakout());
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
     * Initializes a new proforma invoice tax breakout object.
     */
    public function build(): ProformaInvoiceTaxBreakout
    {
        return CoreHelper::clone($this->instance);
    }
}
