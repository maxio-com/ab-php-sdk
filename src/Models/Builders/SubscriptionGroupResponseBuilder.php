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
     * Initializes a new subscription group response Builder object.
     */
    public static function init(SubscriptionGroup $subscriptionGroup): self
    {
        return new self(new SubscriptionGroupResponse($subscriptionGroup));
    }

    /**
     * Initializes a new subscription group response object.
     */
    public function build(): SubscriptionGroupResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
