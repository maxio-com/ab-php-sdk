<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupSignup;
use AdvancedBillingLib\Models\SubscriptionGroupSignupRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupRequest
 *
 * @see SubscriptionGroupSignupRequest
 */
class SubscriptionGroupSignupRequestBuilder
{
    /**
     * @var SubscriptionGroupSignupRequest
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Signup Request Builder object.
     *
     * @param SubscriptionGroupSignup $subscriptionGroup
     */
    public static function init(SubscriptionGroupSignup $subscriptionGroup): self
    {
        return new self(new SubscriptionGroupSignupRequest($subscriptionGroup));
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
     * Initializes a new Subscription Group Signup Request object.
     */
    public function build(): SubscriptionGroupSignupRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
