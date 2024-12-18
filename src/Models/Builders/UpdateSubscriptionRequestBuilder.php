<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateSubscription;
use AdvancedBillingLib\Models\UpdateSubscriptionRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSubscriptionRequest
 *
 * @see UpdateSubscriptionRequest
 */
class UpdateSubscriptionRequestBuilder
{
    /**
     * @var UpdateSubscriptionRequest
     */
    private $instance;

    private function __construct(UpdateSubscriptionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Subscription Request Builder object.
     *
     * @param UpdateSubscription $subscription
     */
    public static function init(UpdateSubscription $subscription): self
    {
        return new self(new UpdateSubscriptionRequest($subscription));
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
     * Initializes a new Update Subscription Request object.
     */
    public function build(): UpdateSubscriptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
