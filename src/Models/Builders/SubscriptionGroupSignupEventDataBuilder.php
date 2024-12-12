<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\SubscriptionGroupSignupEventData;
use AdvancedBillingLib\Models\SubscriptionGroupSignupFailureData;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupEventData
 *
 * @see SubscriptionGroupSignupEventData
 */
class SubscriptionGroupSignupEventDataBuilder
{
    /**
     * @var SubscriptionGroupSignupEventData
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Signup Event Data Builder object.
     *
     * @param SubscriptionGroupSignupFailureData $subscriptionGroup
     */
    public static function init(SubscriptionGroupSignupFailureData $subscriptionGroup): self
    {
        return new self(new SubscriptionGroupSignupEventData($subscriptionGroup));
    }

    /**
     * Sets customer field.
     *
     * @param Customer|null $value
     */
    public function customer(?Customer $value): self
    {
        $this->instance->setCustomer($value);
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
     * Initializes a new Subscription Group Signup Event Data object.
     */
    public function build(): SubscriptionGroupSignupEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
