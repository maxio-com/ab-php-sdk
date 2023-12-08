<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Price;
use Core\Utils\CoreHelper;

/**
 * Builder for model Price
 *
 * @see Price
 */
class PriceBuilder
{
    /**
     * @var Price
     */
    private $instance;

    private function __construct(Price $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new price Builder object.
     */
    public static function init($startingQuantity, $unitPrice): self
    {
        return new self(new Price($startingQuantity, $unitPrice));
    }

    /**
     * Sets ending quantity field.
     */
    public function endingQuantity($value): self
    {
        $this->instance->setEndingQuantity($value);
        return $this;
    }

    /**
     * Unsets ending quantity field.
     */
    public function unsetEndingQuantity(): self
    {
        $this->instance->unsetEndingQuantity();
        return $this;
    }

    /**
     * Initializes a new price object.
     */
    public function build(): Price
    {
        return CoreHelper::clone($this->instance);
    }
}
