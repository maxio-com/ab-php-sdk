<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

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
     * Initializes a new proforma invoice tax Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoiceTax());
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
     * Sets source type field.
     */
    public function sourceType(?string $value): self
    {
        $this->instance->setSourceType($value);
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
     * Sets line item breakouts field.
     */
    public function lineItemBreakouts(?array $value): self
    {
        $this->instance->setLineItemBreakouts($value);
        return $this;
    }

    /**
     * Initializes a new proforma invoice tax object.
     */
    public function build(): ProformaInvoiceTax
    {
        return CoreHelper::clone($this->instance);
    }
}
