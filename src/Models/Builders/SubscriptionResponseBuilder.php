<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Models\SubscriptionResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionResponse
 *
 * @see SubscriptionResponse
 */
class SubscriptionResponseBuilder
{
    /**
     * @var SubscriptionResponse
     */
    private $instance;

    private function __construct(SubscriptionResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Response Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionResponse());
    }

    /**
     * Sets subscription field.
     *
     * @param Subscription|null $value
     */
    public function subscription(?Subscription $value): self
    {
        $this->instance->setSubscription($value);
        return $this;
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
     * Initializes a new Subscription Response object.
     */
    public function build(): SubscriptionResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
