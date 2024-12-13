<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionMRR;
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
     * Initializes a new Subscription MRR Response Builder object.
     *
     * @param SubscriptionMRR[] $subscriptionsMrr
     */
    public static function init(array $subscriptionsMrr): self
    {
        return new self(new SubscriptionMRRResponse($subscriptionsMrr));
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
     * Initializes a new Subscription MRR Response object.
     */
    public function build(): SubscriptionMRRResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
