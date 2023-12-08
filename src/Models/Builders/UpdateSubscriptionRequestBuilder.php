<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateSubscription;
use AdvancedBillingLib\Models\UpdateSubscriptionRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSubscriptionRequest
 *
 * @see UpdateSubscriptionRequest
 */
class UpdateSubscriptionRequestBuilder
{
    /**
     * @var UpdateSubscriptionRequest
     */
    private $instance;

    private function __construct(UpdateSubscriptionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update subscription request Builder object.
     */
    public static function init(UpdateSubscription $subscription): self
    {
        return new self(new UpdateSubscriptionRequest($subscription));
    }

    /**
     * Initializes a new update subscription request object.
     */
    public function build(): UpdateSubscriptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
