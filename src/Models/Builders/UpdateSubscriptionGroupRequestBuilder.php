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
     * Initializes a new update subscription group request Builder object.
     */
    public static function init(UpdateSubscriptionGroup $subscriptionGroup): self
    {
        return new self(new UpdateSubscriptionGroupRequest($subscriptionGroup));
    }

    /**
     * Initializes a new update subscription group request object.
     */
    public function build(): UpdateSubscriptionGroupRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
