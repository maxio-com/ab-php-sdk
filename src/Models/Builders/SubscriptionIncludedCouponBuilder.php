<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionIncludedCoupon;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionIncludedCoupon
 *
 * @see SubscriptionIncludedCoupon
 */
class SubscriptionIncludedCouponBuilder
{
    /**
     * @var SubscriptionIncludedCoupon
     */
    private $instance;

    private function __construct(SubscriptionIncludedCoupon $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Included Coupon Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionIncludedCoupon());
    }

    /**
     * Sets code field.
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets use count field.
     *
     * @param int|null $value
     */
    public function useCount(?int $value): self
    {
        $this->instance->setUseCount($value);
        return $this;
    }

    /**
     * Sets uses allowed field.
     *
     * @param int|null $value
     */
    public function usesAllowed(?int $value): self
    {
        $this->instance->setUsesAllowed($value);
        return $this;
    }

    /**
     * Sets expires at field.
     *
     * @param string|null $value
     */
    public function expiresAt(?string $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Unsets expires at field.
     */
    public function unsetExpiresAt(): self
    {
        $this->instance->unsetExpiresAt();
        return $this;
    }

    /**
     * Sets recurring field.
     *
     * @param bool|null $value
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets amount in cents field.
     *
     * @param int|null $value
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Unsets amount in cents field.
     */
    public function unsetAmountInCents(): self
    {
        $this->instance->unsetAmountInCents();
        return $this;
    }

    /**
     * Sets percentage field.
     *
     * @param string|null $value
     */
    public function percentage(?string $value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Unsets percentage field.
     */
    public function unsetPercentage(): self
    {
        $this->instance->unsetPercentage();
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
     * Initializes a new Subscription Included Coupon object.
     */
    public function build(): SubscriptionIncludedCoupon
    {
        return CoreHelper::clone($this->instance);
    }
}
