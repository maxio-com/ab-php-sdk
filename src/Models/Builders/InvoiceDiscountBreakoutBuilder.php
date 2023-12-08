<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceDiscountBreakout;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceDiscountBreakout
 *
 * @see InvoiceDiscountBreakout
 */
class InvoiceDiscountBreakoutBuilder
{
    /**
     * @var InvoiceDiscountBreakout
     */
    private $instance;

    private function __construct(InvoiceDiscountBreakout $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice discount breakout Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceDiscountBreakout());
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
     * Initializes a new invoice discount breakout object.
     */
    public function build(): InvoiceDiscountBreakout
    {
        return CoreHelper::clone($this->instance);
    }
}
