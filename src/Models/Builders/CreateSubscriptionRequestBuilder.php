<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateSubscription;
use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateSubscriptionRequest
 *
 * @see CreateSubscriptionRequest
 */
class CreateSubscriptionRequestBuilder
{
    /**
     * @var CreateSubscriptionRequest
     */
    private $instance;

    private function __construct(CreateSubscriptionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create subscription request Builder object.
     */
    public static function init(CreateSubscription $subscription): self
    {
        return new self(new CreateSubscriptionRequest($subscription));
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
     * Initializes a new create subscription request object.
     */
    public function build(): CreateSubscriptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
