<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupSingleError;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSingleError
 *
 * @see SubscriptionGroupSingleError
 */
class SubscriptionGroupSingleErrorBuilder
{
    /**
     * @var SubscriptionGroupSingleError
     */
    private $instance;

    private function __construct(SubscriptionGroupSingleError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Single Error Builder object.
     *
     * @param string $subscriptionGroup
     */
    public static function init(string $subscriptionGroup): self
    {
        return new self(new SubscriptionGroupSingleError($subscriptionGroup));
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
     * Initializes a new Subscription Group Single Error object.
     */
    public function build(): SubscriptionGroupSingleError
    {
        return CoreHelper::clone($this->instance);
    }
}
