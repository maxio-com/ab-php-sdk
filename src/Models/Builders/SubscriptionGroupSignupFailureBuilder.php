<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupSignupFailure;
use AdvancedBillingLib\Models\SubscriptionGroupSignupFailureData;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupFailure
 *
 * @see SubscriptionGroupSignupFailure
 */
class SubscriptionGroupSignupFailureBuilder
{
    /**
     * @var SubscriptionGroupSignupFailure
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupFailure $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group signup failure Builder object.
     */
    public static function init(SubscriptionGroupSignupFailureData $subscriptionGroup): self
    {
        return new self(new SubscriptionGroupSignupFailure($subscriptionGroup));
    }

    /**
     * Sets customer field.
     */
    public function customer(?string $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new subscription group signup failure object.
     */
    public function build(): SubscriptionGroupSignupFailure
    {
        return CoreHelper::clone($this->instance);
    }
}
