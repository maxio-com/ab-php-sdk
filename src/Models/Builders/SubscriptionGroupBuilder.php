<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroup;
use AdvancedBillingLib\Models\SubscriptionGroupPaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroup
 *
 * @see SubscriptionGroup
 */
class SubscriptionGroupBuilder
{
    /**
     * @var SubscriptionGroup
     */
    private $instance;

    private function __construct(SubscriptionGroup $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroup());
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets payment profile field.
     */
    public function paymentProfile(?SubscriptionGroupPaymentProfile $value): self
    {
        $this->instance->setPaymentProfile($value);
        return $this;
    }

    /**
     * Sets payment collection method field.
     */
    public function paymentCollectionMethod(?string $value): self
    {
        $this->instance->setPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Sets subscription ids field.
     */
    public function subscriptionIds(?array $value): self
    {
        $this->instance->setSubscriptionIds($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Initializes a new subscription group object.
     */
    public function build(): SubscriptionGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
