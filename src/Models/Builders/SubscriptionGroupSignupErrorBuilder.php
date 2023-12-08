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
     * Initializes a new subscription group signup error Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSignupError());
    }

    /**
     * Sets subscriptions field.
     */
    public function subscriptions(?array $value): self
    {
        $this->instance->setSubscriptions($value);
        return $this;
    }

    /**
     * Sets payer reference field.
     */
    public function payerReference(?string $value): self
    {
        $this->instance->setPayerReference($value);
        return $this;
    }

    /**
     * Sets payer field.
     */
    public function payer(?PayerError $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Sets subscription group field.
     */
    public function subscriptionGroup(?array $value): self
    {
        $this->instance->setSubscriptionGroup($value);
        return $this;
    }

    /**
     * Sets payment profile id field.
     */
    public function paymentProfileId(?string $value): self
    {
        $this->instance->setPaymentProfileId($value);
        return $this;
    }

    /**
     * Sets payer id field.
     */
    public function payerId(?string $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Initializes a new subscription group signup error object.
     */
    public function build(): SubscriptionGroupSignupError
    {
        return CoreHelper::clone($this->instance);
    }
}
