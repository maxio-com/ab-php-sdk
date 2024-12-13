<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionComponentSubscription;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionComponentSubscription
 *
 * @see SubscriptionComponentSubscription
 */
class SubscriptionComponentSubscriptionBuilder
{
    /**
     * @var SubscriptionComponentSubscription
     */
    private $instance;

    private function __construct(SubscriptionComponentSubscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Component Subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionComponentSubscription());
    }

    /**
     * Sets state field.
     *
     * @param string|null $value
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
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
     * Initializes a new Subscription Component Subscription object.
     */
    public function build(): SubscriptionComponentSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
