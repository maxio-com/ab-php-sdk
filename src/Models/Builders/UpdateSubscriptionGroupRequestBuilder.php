<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateSubscriptionGroup;
use AdvancedBillingLib\Models\UpdateSubscriptionGroupRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSubscriptionGroupRequest
 *
 * @see UpdateSubscriptionGroupRequest
 */
class UpdateSubscriptionGroupRequestBuilder
{
    /**
     * @var UpdateSubscriptionGroupRequest
     */
    private $instance;

    private function __construct(UpdateSubscriptionGroupRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Subscription Group Request Builder object.
     *
     * @param UpdateSubscriptionGroup $subscriptionGroup
     */
    public static function init(UpdateSubscriptionGroup $subscriptionGroup): self
    {
        return new self(new UpdateSubscriptionGroupRequest($subscriptionGroup));
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
     * Initializes a new Update Subscription Group Request object.
     */
    public function build(): UpdateSubscriptionGroupRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
