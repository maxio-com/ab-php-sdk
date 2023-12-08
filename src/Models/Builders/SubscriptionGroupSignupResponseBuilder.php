<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupSignupResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupResponse
 *
 * @see SubscriptionGroupSignupResponse
 */
class SubscriptionGroupSignupResponseBuilder
{
    /**
     * @var SubscriptionGroupSignupResponse
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group signup response Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSignupResponse());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets scheme field.
     */
    public function scheme(?int $value): self
    {
        $this->instance->setScheme($value);
        return $this;
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
     * Sets payment profile id field.
     */
    public function paymentProfileId(?int $value): self
    {
        $this->instance->setPaymentProfileId($value);
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
     * Sets primary subscription id field.
     */
    public function primarySubscriptionId(?int $value): self
    {
        $this->instance->setPrimarySubscriptionId($value);
        return $this;
    }

    /**
     * Sets next assessment at field.
     */
    public function nextAssessmentAt(?string $value): self
    {
        $this->instance->setNextAssessmentAt($value);
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets cancel at end of period field.
     */
    public function cancelAtEndOfPeriod(?bool $value): self
    {
        $this->instance->setCancelAtEndOfPeriod($value);
        return $this;
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
     * Sets payment collection method field.
     */
    public function paymentCollectionMethod(?string $value): self
    {
        $this->instance->setPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Initializes a new subscription group signup response object.
     */
    public function build(): SubscriptionGroupSignupResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
