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
     * Initializes a new subscription response Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionResponse());
    }

    /**
     * Sets subscription field.
     */
    public function subscription(?Subscription $value): self
    {
        $this->instance->setSubscription($value);
        return $this;
    }

    /**
     * Initializes a new subscription response object.
     */
    public function build(): SubscriptionResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
