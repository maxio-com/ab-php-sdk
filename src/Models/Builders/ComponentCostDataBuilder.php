<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCostData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentCostData
 *
 * @see ComponentCostData
 */
class ComponentCostDataBuilder
{
    /**
     * @var ComponentCostData
     */
    private $instance;

    private function __construct(ComponentCostData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component cost data Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentCostData());
    }

    /**
     * Sets component code id field.
     */
    public function componentCodeId(?int $value): self
    {
        $this->instance->setComponentCodeId($value);
        return $this;
    }

    /**
     * Unsets component code id field.
     */
    public function unsetComponentCodeId(): self
    {
        $this->instance->unsetComponentCodeId();
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
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
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets pricing scheme field.
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Sets tiers field.
     */
    public function tiers(?array $value): self
    {
        $this->instance->setTiers($value);
        return $this;
    }

    /**
     * Initializes a new component cost data object.
     */
    public function build(): ComponentCostData
    {
        return CoreHelper::clone($this->instance);
    }
}
