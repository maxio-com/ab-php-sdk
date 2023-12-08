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
     * Initializes a new component cost data rate tier Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentCostDataRateTier());
    }

    /**
     * Sets starting quantity field.
     */
    public function startingQuantity(?int $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Sets ending quantity field.
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
     */
    public function quantity(?string $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets unit price field.
     */
    public function unitPrice(?string $value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Initializes a new component cost data rate tier object.
     */
    public function build(): ComponentCostDataRateTier
    {
        return CoreHelper::clone($this->instance);
    }
}
