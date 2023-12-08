<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupItem
 *
 * @see SubscriptionGroupItem
 */
class SubscriptionGroupItemBuilder
{
    /**
     * @var SubscriptionGroupItem
     */
    private $instance;

    private function __construct(SubscriptionGroupItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group item Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupItem());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Unsets reference field.
     */
    public function unsetReference(): self
    {
        $this->instance->unsetReference();
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product handle field.
     */
    public function productHandle(?string $value): self
    {
        $this->instance->setProductHandle($value);
        return $this;
    }

    /**
     * Unsets product handle field.
     */
    public function unsetProductHandle(): self
    {
        $this->instance->unsetProductHandle();
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets product price point handle field.
     */
    public function productPricePointHandle(?string $value): self
    {
        $this->instance->setProductPricePointHandle($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
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
     * Unsets coupon code field.
     */
    public function unsetCouponCode(): self
    {
        $this->instance->unsetCouponCode();
        return $this;
    }

    /**
     * Sets total revenue in cents field.
     */
    public function totalRevenueInCents(?int $value): self
    {
        $this->instance->setTotalRevenueInCents($value);
        return $this;
    }

    /**
     * Sets balance in cents field.
     */
    public function balanceInCents(?int $value): self
    {
        $this->instance->setBalanceInCents($value);
        return $this;
    }

    /**
     * Initializes a new subscription group item object.
     */
    public function build(): SubscriptionGroupItem
    {
        return CoreHelper::clone($this->instance);
    }
}
