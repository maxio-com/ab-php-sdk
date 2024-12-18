<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCustomPrice;
use AdvancedBillingLib\Models\CreateSubscriptionComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateSubscriptionComponent
 *
 * @see CreateSubscriptionComponent
 */
class CreateSubscriptionComponentBuilder
{
    /**
     * @var CreateSubscriptionComponent
     */
    private $instance;

    private function __construct(CreateSubscriptionComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Subscription Component Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateSubscriptionComponent());
    }

    /**
     * Sets component id field.
     *
     * @param int|string|null $value
     */
    public function componentId($value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets unit balance field.
     *
     * @param int|null $value
     */
    public function unitBalance(?int $value): self
    {
        $this->instance->setUnitBalance($value);
        return $this;
    }

    /**
     * Sets allocated quantity field.
     *
     * @param int|string|null $value
     */
    public function allocatedQuantity($value): self
    {
        $this->instance->setAllocatedQuantity($value);
        return $this;
    }

    /**
     * Sets quantity field.
     *
     * @param int|null $value
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param int|string|null $value
     */
    public function pricePointId($value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets custom price field.
     *
     * @param ComponentCustomPrice|null $value
     */
    public function customPrice(?ComponentCustomPrice $value): self
    {
        $this->instance->setCustomPrice($value);
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
     * Initializes a new Create Subscription Component object.
     */
    public function build(): CreateSubscriptionComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
