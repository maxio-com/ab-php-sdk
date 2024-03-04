<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OverrideSubscription;
use AdvancedBillingLib\Models\OverrideSubscriptionRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model OverrideSubscriptionRequest
 *
 * @see OverrideSubscriptionRequest
 */
class OverrideSubscriptionRequestBuilder
{
    /**
     * @var OverrideSubscriptionRequest
     */
    private $instance;

    private function __construct(OverrideSubscriptionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new override subscription request Builder object.
     */
    public static function init(OverrideSubscription $subscription): self
    {
        return new self(new OverrideSubscriptionRequest($subscription));
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
     * Initializes a new override subscription request object.
     */
    public function build(): OverrideSubscriptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
