<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProformaInvoiceDiscountBreakout;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaInvoiceDiscountBreakout
 *
 * @see ProformaInvoiceDiscountBreakout
 */
class ProformaInvoiceDiscountBreakoutBuilder
{
    /**
     * @var ProformaInvoiceDiscountBreakout
     */
    private $instance;

    private function __construct(ProformaInvoiceDiscountBreakout $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new proforma invoice discount breakout Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoiceDiscountBreakout());
    }

    /**
     * Sets eligible amount field.
     */
    public function eligibleAmount(?string $value): self
    {
        $this->instance->setEligibleAmount($value);
        return $this;
    }

    /**
     * Sets discount amount field.
     */
    public function discountAmount(?string $value): self
    {
        $this->instance->setDiscountAmount($value);
        return $this;
    }

    /**
     * Initializes a new proforma invoice discount breakout object.
     */
    public function build(): ProformaInvoiceDiscountBreakout
    {
        return CoreHelper::clone($this->instance);
    }
}
