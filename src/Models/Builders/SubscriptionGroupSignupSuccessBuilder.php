<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\SubscriptionGroupSignupSuccess;
use AdvancedBillingLib\Models\SubscriptionGroupSignupSuccessData;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupSuccess
 *
 * @see SubscriptionGroupSignupSuccess
 */
class SubscriptionGroupSignupSuccessBuilder
{
    /**
     * @var SubscriptionGroupSignupSuccess
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupSuccess $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group signup success Builder object.
     */
    public static function init(SubscriptionGroupSignupSuccessData $subscriptionGroup, Customer $customer): self
    {
        return new self(new SubscriptionGroupSignupSuccess($subscriptionGroup, $customer));
    }

    /**
     * Initializes a new subscription group signup success object.
     */
    public function build(): SubscriptionGroupSignupSuccess
    {
        return CoreHelper::clone($this->instance);
    }
}
