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
     * Initializes a new create subscription component Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateSubscriptionComponent());
    }

    /**
     * Sets component id field.
     */
    public function componentId($value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets enabled field.
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets unit balance field.
     */
    public function unitBalance(?int $value): self
    {
        $this->instance->setUnitBalance($value);
        return $this;
    }

    /**
     * Sets allocated quantity field.
     */
    public function allocatedQuantity(?int $value): self
    {
        $this->instance->setAllocatedQuantity($value);
        return $this;
    }

    /**
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId($value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets custom price field.
     */
    public function customPrice(?ComponentCustomPrice $value): self
    {
        $this->instance->setCustomPrice($value);
        return $this;
    }

    /**
     * Initializes a new create subscription component object.
     */
    public function build(): CreateSubscriptionComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
