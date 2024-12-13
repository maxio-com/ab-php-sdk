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
     * Initializes a new Subscription Group Item Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupItem());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets reference field.
     *
     * @param string|null $value
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
     *
     * @param int|null $value
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product handle field.
     *
     * @param string|null $value
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
     *
     * @param int|null $value
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets product price point handle field.
     *
     * @param string|null $value
     */
    public function productPricePointHandle(?string $value): self
    {
        $this->instance->setProductPricePointHandle($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
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
     * Unsets coupon code field.
     */
    public function unsetCouponCode(): self
    {
        $this->instance->unsetCouponCode();
        return $this;
    }

    /**
     * Sets total revenue in cents field.
     *
     * @param int|null $value
     */
    public function totalRevenueInCents(?int $value): self
    {
        $this->instance->setTotalRevenueInCents($value);
        return $this;
    }

    /**
     * Sets balance in cents field.
     *
     * @param int|null $value
     */
    public function balanceInCents(?int $value): self
    {
        $this->instance->setBalanceInCents($value);
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
     * Initializes a new Subscription Group Item object.
     */
    public function build(): SubscriptionGroupItem
    {
        return CoreHelper::clone($this->instance);
    }
}
