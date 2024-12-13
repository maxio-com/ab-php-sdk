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
     * Initializes a new Price Builder object.
     *
     * @param int|string $startingQuantity
     * @param float|string $unitPrice
     */
    public static function init($startingQuantity, $unitPrice): self
    {
        return new self(new Price($startingQuantity, $unitPrice));
    }

    /**
     * Sets ending quantity field.
     *
     * @param int|string|null $value
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
     * Initializes a new Price object.
     */
    public function build(): Price
    {
        return CoreHelper::clone($this->instance);
    }
}
