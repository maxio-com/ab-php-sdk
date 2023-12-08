<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionComponentSubscription;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionComponentSubscription
 *
 * @see SubscriptionComponentSubscription
 */
class SubscriptionComponentSubscriptionBuilder
{
    /**
     * @var SubscriptionComponentSubscription
     */
    private $instance;

    private function __construct(SubscriptionComponentSubscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription component subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionComponentSubscription());
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?string $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Initializes a new subscription component subscription object.
     */
    public function build(): SubscriptionComponentSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
