<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateSubscriptionGroup;
use AdvancedBillingLib\Models\CreateSubscriptionGroupRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateSubscriptionGroupRequest
 *
 * @see CreateSubscriptionGroupRequest
 */
class CreateSubscriptionGroupRequestBuilder
{
    /**
     * @var CreateSubscriptionGroupRequest
     */
    private $instance;

    private function __construct(CreateSubscriptionGroupRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Subscription Group Request Builder object.
     *
     * @param CreateSubscriptionGroup $subscriptionGroup
     */
    public static function init(CreateSubscriptionGroup $subscriptionGroup): self
    {
        return new self(new CreateSubscriptionGroupRequest($subscriptionGroup));
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
     * Initializes a new Create Subscription Group Request object.
     */
    public function build(): CreateSubscriptionGroupRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
