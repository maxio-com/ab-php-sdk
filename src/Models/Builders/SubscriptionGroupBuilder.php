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
     * Initializes a new Subscription Group Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroup());
    }

    /**
     * Sets customer id field.
     *
     * @param int|null $value
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets payment profile field.
     *
     * @param SubscriptionGroupPaymentProfile|null $value
     */
    public function paymentProfile(?SubscriptionGroupPaymentProfile $value): self
    {
        $this->instance->setPaymentProfile($value);
        return $this;
    }

    /**
     * Sets payment collection method field.
     *
     * @param string|null $value
     */
    public function paymentCollectionMethod(?string $value): self
    {
        $this->instance->setPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Sets subscription ids field.
     *
     * @param int[]|null $value
     */
    public function subscriptionIds(?array $value): self
    {
        $this->instance->setSubscriptionIds($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
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
     * Initializes a new Subscription Group object.
     */
    public function build(): SubscriptionGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
