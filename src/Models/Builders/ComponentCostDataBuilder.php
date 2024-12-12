<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCostData;
use AdvancedBillingLib\Models\ComponentCostDataRateTier;
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
     * Initializes a new Component Cost Data Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentCostData());
    }

    /**
     * Sets component code id field.
     *
     * @param int|null $value
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
     *
     * @param int|null $value
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets product id field.
     *
     * @param int|null $value
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
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
     * Sets pricing scheme field.
     *
     * @param string|null $value
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Sets tiers field.
     *
     * @param ComponentCostDataRateTier[]|null $value
     */
    public function tiers(?array $value): self
    {
        $this->instance->setTiers($value);
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
     * Initializes a new Component Cost Data object.
     */
    public function build(): ComponentCostData
    {
        return CoreHelper::clone($this->instance);
    }
}
