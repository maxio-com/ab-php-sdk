<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PayerError;
use AdvancedBillingLib\Models\SubscriptionGroupSignupError;
use AdvancedBillingLib\Models\SubscriptionGroupSubscriptionError;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupError
 *
 * @see SubscriptionGroupSignupError
 */
class SubscriptionGroupSignupErrorBuilder
{
    /**
     * @var SubscriptionGroupSignupError
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Signup Error Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSignupError());
    }

    /**
     * Sets subscriptions field.
     *
     * @param array<string,SubscriptionGroupSubscriptionError>|null $value
     */
    public function subscriptions(?array $value): self
    {
        $this->instance->setSubscriptions($value);
        return $this;
    }

    /**
     * Sets payer reference field.
     *
     * @param string|null $value
     */
    public function payerReference(?string $value): self
    {
        $this->instance->setPayerReference($value);
        return $this;
    }

    /**
     * Sets payer field.
     *
     * @param PayerError|null $value
     */
    public function payer(?PayerError $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Sets subscription group field.
     *
     * @param string[]|null $value
     */
    public function subscriptionGroup(?array $value): self
    {
        $this->instance->setSubscriptionGroup($value);
        return $this;
    }

    /**
     * Sets payment profile id field.
     *
     * @param string|null $value
     */
    public function paymentProfileId(?string $value): self
    {
        $this->instance->setPaymentProfileId($value);
        return $this;
    }

    /**
     * Sets payer id field.
     *
     * @param string|null $value
     */
    public function payerId(?string $value): self
    {
        $this->instance->setPayerId($value);
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
     * Initializes a new Subscription Group Signup Error object.
     */
    public function build(): SubscriptionGroupSignupError
    {
        return CoreHelper::clone($this->instance);
    }
}
