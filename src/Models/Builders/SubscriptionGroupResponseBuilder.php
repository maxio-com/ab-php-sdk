<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroup;
use AdvancedBillingLib\Models\SubscriptionGroupResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupResponse
 *
 * @see SubscriptionGroupResponse
 */
class SubscriptionGroupResponseBuilder
{
    /**
     * @var SubscriptionGroupResponse
     */
    private $instance;

    private function __construct(SubscriptionGroupResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Response Builder object.
     *
     * @param SubscriptionGroup $subscriptionGroup
     */
    public static function init(SubscriptionGroup $subscriptionGroup): self
    {
        return new self(new SubscriptionGroupResponse($subscriptionGroup));
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
     * Initializes a new Subscription Group Response object.
     */
    public function build(): SubscriptionGroupResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
