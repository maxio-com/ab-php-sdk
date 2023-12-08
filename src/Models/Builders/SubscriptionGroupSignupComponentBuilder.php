<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupComponentCustomPrice;
use AdvancedBillingLib\Models\SubscriptionGroupSignupComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupComponent
 *
 * @see SubscriptionGroupSignupComponent
 */
class SubscriptionGroupSignupComponentBuilder
{
    /**
     * @var SubscriptionGroupSignupComponent
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group signup component Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSignupComponent());
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
     * Sets allocated quantity field.
     */
    public function allocatedQuantity($value): self
    {
        $this->instance->setAllocatedQuantity($value);
        return $this;
    }

    /**
     * Sets unit balance field.
     */
    public function unitBalance($value): self
    {
        $this->instance->setUnitBalance($value);
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
    public function customPrice(?SubscriptionGroupComponentCustomPrice $value): self
    {
        $this->instance->setCustomPrice($value);
        return $this;
    }

    /**
     * Initializes a new subscription group signup component object.
     */
    public function build(): SubscriptionGroupSignupComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
