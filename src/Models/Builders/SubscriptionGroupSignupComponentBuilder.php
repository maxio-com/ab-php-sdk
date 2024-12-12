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
     * Initializes a new Subscription Group Signup Component Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSignupComponent());
    }

    /**
     * Sets component id field.
     *
     * @param string|int|null $value
     */
    public function componentId($value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets allocated quantity field.
     *
     * @param string|int|null $value
     */
    public function allocatedQuantity($value): self
    {
        $this->instance->setAllocatedQuantity($value);
        return $this;
    }

    /**
     * Sets unit balance field.
     *
     * @param string|int|null $value
     */
    public function unitBalance($value): self
    {
        $this->instance->setUnitBalance($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param string|int|null $value
     */
    public function pricePointId($value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets custom price field.
     *
     * @param SubscriptionGroupComponentCustomPrice|null $value
     */
    public function customPrice(?SubscriptionGroupComponentCustomPrice $value): self
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
     * Initializes a new Subscription Group Signup Component object.
     */
    public function build(): SubscriptionGroupSignupComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
