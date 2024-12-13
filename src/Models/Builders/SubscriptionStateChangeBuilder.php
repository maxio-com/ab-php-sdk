<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionStateChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionStateChange
 *
 * @see SubscriptionStateChange
 */
class SubscriptionStateChangeBuilder
{
    /**
     * @var SubscriptionStateChange
     */
    private $instance;

    private function __construct(SubscriptionStateChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription State Change Builder object.
     *
     * @param string $previousSubscriptionState
     * @param string $newSubscriptionState
     */
    public static function init(string $previousSubscriptionState, string $newSubscriptionState): self
    {
        return new self(new SubscriptionStateChange($previousSubscriptionState, $newSubscriptionState));
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
     * Initializes a new Subscription State Change object.
     */
    public function build(): SubscriptionStateChange
    {
        return CoreHelper::clone($this->instance);
    }
}
