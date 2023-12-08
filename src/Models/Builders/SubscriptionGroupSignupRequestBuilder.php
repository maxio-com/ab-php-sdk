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
     * Initializes a new subscription group signup request Builder object.
     */
    public static function init(SubscriptionGroupSignup $subscriptionGroup): self
    {
        return new self(new SubscriptionGroupSignupRequest($subscriptionGroup));
    }

    /**
     * Initializes a new subscription group signup request object.
     */
    public function build(): SubscriptionGroupSignupRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
