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
use AdvancedBillingLib\Models\SubscriptionGroupSignupComponent;
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
     * Initializes a new Subscription Group Signup Item Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSignupItem());
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
     * Sets offer id field.
     *
     * @param int|null $value
     */
    public function offerId(?int $value): self
    {
        $this->instance->setOfferId($value);
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
     * Sets primary field.
     *
     * @param bool|null $value
     */
    public function primary(?bool $value): self
    {
        $this->instance->setPrimary($value);
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
     * Sets coupon codes field.
     *
     * @param string[]|null $value
     */
    public function couponCodes(?array $value): self
    {
        $this->instance->setCouponCodes($value);
        return $this;
    }

    /**
     * Sets components field.
     *
     * @param SubscriptionGroupSignupComponent[]|null $value
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Sets custom price field.
     *
     * @param SubscriptionCustomPrice|null $value
     */
    public function customPrice(?SubscriptionCustomPrice $value): self
    {
        $this->instance->setCustomPrice($value);
        return $this;
    }

    /**
     * Sets calendar billing field.
     *
     * @param CalendarBilling|null $value
     */
    public function calendarBilling(?CalendarBilling $value): self
    {
        $this->instance->setCalendarBilling($value);
        return $this;
    }

    /**
     * Sets metafields field.
     *
     * @param array<string,string>|null $value
     */
    public function metafields(?array $value): self
    {
        $this->instance->setMetafields($value);
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
     * Initializes a new Subscription Group Signup Item object.
     */
    public function build(): SubscriptionGroupSignupItem
    {
        return CoreHelper::clone($this->instance);
    }
}
