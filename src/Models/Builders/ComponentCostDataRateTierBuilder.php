<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCostDataRateTier;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentCostDataRateTier
 *
 * @see ComponentCostDataRateTier
 */
class ComponentCostDataRateTierBuilder
{
    /**
     * @var ComponentCostDataRateTier
     */
    private $instance;

    private function __construct(ComponentCostDataRateTier $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Cost Data Rate Tier Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentCostDataRateTier());
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
     * Sets quantity field.
     *
     * @param string|null $value
     */
    public function quantity(?string $value): self
    {
        $this->instance->setQuantity($value);
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
     * Sets amount field.
     *
     * @param string|null $value
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
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
     * Initializes a new Component Cost Data Rate Tier object.
     */
    public function build(): ComponentCostDataRateTier
    {
        return CoreHelper::clone($this->instance);
    }
}
