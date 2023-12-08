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
     * Initializes a new create subscription group request Builder object.
     */
    public static function init(CreateSubscriptionGroup $subscriptionGroup): self
    {
        return new self(new CreateSubscriptionGroupRequest($subscriptionGroup));
    }

    /**
     * Initializes a new create subscription group request object.
     */
    public function build(): CreateSubscriptionGroupRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
