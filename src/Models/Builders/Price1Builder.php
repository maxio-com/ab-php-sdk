<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Price1;
use Core\Utils\CoreHelper;

/**
 * Builder for model Price1
 *
 * @see Price1
 */
class Price1Builder
{
    /**
     * @var Price1
     */
    private $instance;

    private function __construct(Price1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Price 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new Price1());
    }

    /**
     * Sets starting quantity field.
     *
     * @param int|null $value
     */
    public function startingQuantity(?int $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Sets ending quantity field.
     *
     * @param int|null $value
     */
    public function endingQuantity(?int $value): self
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
     * Sets unit price field.
     *
     * @param string|null $value
     */
    public function unitPrice(?string $value): self
    {
        $this->instance->setUnitPrice($value);
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
     * Initializes a new Price 1 object.
     */
    public function build(): Price1
    {
        return CoreHelper::clone($this->instance);
    }
}
