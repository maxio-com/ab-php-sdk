<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionMRRResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionMRRResponse
 *
 * @see SubscriptionMRRResponse
 */
class SubscriptionMRRResponseBuilder
{
    /**
     * @var SubscriptionMRRResponse
     */
    private $instance;

    private function __construct(SubscriptionMRRResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription mrrresponse Builder object.
     */
    public static function init(array $subscriptionsMrr): self
    {
        return new self(new SubscriptionMRRResponse($subscriptionsMrr));
    }

    /**
     * Initializes a new subscription mrrresponse object.
     */
    public function build(): SubscriptionMRRResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
