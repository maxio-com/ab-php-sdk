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
     * Initializes a new reactivate subscription request Builder object.
     */
    public static function init(): self
    {
        return new self(new ReactivateSubscriptionRequest());
    }

    /**
     * Sets calendar billing field.
     */
    public function calendarBilling(?ReactivationBilling $value): self
    {
        $this->instance->setCalendarBilling($value);
        return $this;
    }

    /**
     * Sets include trial field.
     */
    public function includeTrial(?bool $value): self
    {
        $this->instance->setIncludeTrial($value);
        return $this;
    }

    /**
     * Sets preserve balance field.
     */
    public function preserveBalance(?bool $value): self
    {
        $this->instance->setPreserveBalance($value);
        return $this;
    }

    /**
     * Sets coupon code field.
     */
    public function couponCode(?string $value): self
    {
        $this->instance->setCouponCode($value);
        return $this;
    }

    /**
     * Sets use credits and prepayments field.
     */
    public function useCreditsAndPrepayments(?bool $value): self
    {
        $this->instance->setUseCreditsAndPrepayments($value);
        return $this;
    }

    /**
     * Sets resume field.
     */
    public function resume($value): self
    {
        $this->instance->setResume($value);
        return $this;
    }

    /**
     * Initializes a new reactivate subscription request object.
     */
    public function build(): ReactivateSubscriptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
