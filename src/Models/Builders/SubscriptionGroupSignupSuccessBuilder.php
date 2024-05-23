<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Customer1;
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
    public static function init(SubscriptionGroupSignupSuccessData $subscriptionGroup, Customer1 $customer): self
    {
        return new self(new SubscriptionGroupSignupSuccess($subscriptionGroup, $customer));
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
     * Initializes a new subscription group signup success object.
     */
    public function build(): SubscriptionGroupSignupSuccess
    {
        return CoreHelper::clone($this->instance);
    }
}
