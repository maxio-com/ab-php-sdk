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
     * Initializes a new Invoice Discount Breakout Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceDiscountBreakout());
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
     * Sets eligible amount field.
     *
     * @param string|null $value
     */
    public function eligibleAmount(?string $value): self
    {
        $this->instance->setEligibleAmount($value);
        return $this;
    }

    /**
     * Sets discount amount field.
     *
     * @param string|null $value
     */
    public function discountAmount(?string $value): self
    {
        $this->instance->setDiscountAmount($value);
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
     * Initializes a new Invoice Discount Breakout object.
     */
    public function build(): InvoiceDiscountBreakout
    {
        return CoreHelper::clone($this->instance);
    }
}
