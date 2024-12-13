<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReactivateSubscriptionRequest;
use AdvancedBillingLib\Models\ReactivationBilling;
use AdvancedBillingLib\Models\ResumeOptions;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReactivateSubscriptionRequest
 *
 * @see ReactivateSubscriptionRequest
 */
class ReactivateSubscriptionRequestBuilder
{
    /**
     * @var ReactivateSubscriptionRequest
     */
    private $instance;

    private function __construct(ReactivateSubscriptionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Reactivate Subscription Request Builder object.
     */
    public static function init(): self
    {
        return new self(new ReactivateSubscriptionRequest());
    }

    /**
     * Sets calendar billing field.
     *
     * @param ReactivationBilling|null $value
     */
    public function calendarBilling(?ReactivationBilling $value): self
    {
        $this->instance->setCalendarBilling($value);
        return $this;
    }

    /**
     * Sets include trial field.
     *
     * @param bool|null $value
     */
    public function includeTrial(?bool $value): self
    {
        $this->instance->setIncludeTrial($value);
        return $this;
    }

    /**
     * Sets preserve balance field.
     *
     * @param bool|null $value
     */
    public function preserveBalance(?bool $value): self
    {
        $this->instance->setPreserveBalance($value);
        return $this;
    }

    /**
     * Sets coupon code field.
     *
     * @param string|null $value
     */
    public function couponCode(?string $value): self
    {
        $this->instance->setCouponCode($value);
        return $this;
    }

    /**
     * Sets use credits and prepayments field.
     *
     * @param bool|null $value
     */
    public function useCreditsAndPrepayments(?bool $value): self
    {
        $this->instance->setUseCreditsAndPrepayments($value);
        return $this;
    }

    /**
     * Sets resume field.
     *
     * @param bool|ResumeOptions|null $value
     */
    public function resume($value): self
    {
        $this->instance->setResume($value);
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
     * Initializes a new Reactivate Subscription Request object.
     */
    public function build(): ReactivateSubscriptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
