<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionMRR;
use AdvancedBillingLib\Models\SubscriptionMRRBreakout;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionMRR
 *
 * @see SubscriptionMRR
 */
class SubscriptionMRRBuilder
{
    /**
     * @var SubscriptionMRR
     */
    private $instance;

    private function __construct(SubscriptionMRR $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription MRR Builder object.
     *
     * @param int $subscriptionId
     * @param int $mrrAmountInCents
     */
    public static function init(int $subscriptionId, int $mrrAmountInCents): self
    {
        return new self(new SubscriptionMRR($subscriptionId, $mrrAmountInCents));
    }

    /**
     * Sets breakouts field.
     *
     * @param SubscriptionMRRBreakout|null $value
     */
    public function breakouts(?SubscriptionMRRBreakout $value): self
    {
        $this->instance->setBreakouts($value);
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
     * Initializes a new Subscription MRR object.
     */
    public function build(): SubscriptionMRR
    {
        return CoreHelper::clone($this->instance);
    }
}
