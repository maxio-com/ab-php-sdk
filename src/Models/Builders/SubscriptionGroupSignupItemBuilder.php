<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CalendarBilling;
use AdvancedBillingLib\Models\SubscriptionCustomPrice;
use AdvancedBillingLib\Models\SubscriptionGroupSignupItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupItem
 *
 * @see SubscriptionGroupSignupItem
 */
class SubscriptionGroupSignupItemBuilder
{
    /**
     * @var SubscriptionGroupSignupItem
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group signup item Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSignupItem());
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
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
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
     * Sets offer id field.
     */
    public function offerId(?int $value): self
    {
        $this->instance->setOfferId($value);
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
     * Sets primary field.
     */
    public function primary(?bool $value): self
    {
        $this->instance->setPrimary($value);
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
     * Sets coupon codes field.
     */
    public function couponCodes(?array $value): self
    {
        $this->instance->setCouponCodes($value);
        return $this;
    }

    /**
     * Sets components field.
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Sets custom price field.
     */
    public function customPrice(?SubscriptionCustomPrice $value): self
    {
        $this->instance->setCustomPrice($value);
        return $this;
    }

    /**
     * Sets calendar billing field.
     */
    public function calendarBilling(?CalendarBilling $value): self
    {
        $this->instance->setCalendarBilling($value);
        return $this;
    }

    /**
     * Sets metafields field.
     */
    public function metafields(?array $value): self
    {
        $this->instance->setMetafields($value);
        return $this;
    }

    /**
     * Initializes a new subscription group signup item object.
     */
    public function build(): SubscriptionGroupSignupItem
    {
        return CoreHelper::clone($this->instance);
    }
}
