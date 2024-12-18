<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCustomPrice;
use AdvancedBillingLib\Models\UpdateSubscriptionComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSubscriptionComponent
 *
 * @see UpdateSubscriptionComponent
 */
class UpdateSubscriptionComponentBuilder
{
    /**
     * @var UpdateSubscriptionComponent
     */
    private $instance;

    private function __construct(UpdateSubscriptionComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Subscription Component Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateSubscriptionComponent());
    }

    /**
     * Sets component id field.
     *
     * @param int|null $value
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
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
     * Initializes a new Update Subscription Component object.
     */
    public function build(): UpdateSubscriptionComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
