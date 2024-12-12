<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponCurrency;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponCurrency
 *
 * @see CouponCurrency
 */
class CouponCurrencyBuilder
{
    /**
     * @var CouponCurrency
     */
    private $instance;

    private function __construct(CouponCurrency $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Coupon Currency Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponCurrency());
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
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
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
     * Sets price field.
     *
     * @param float|null $value
     */
    public function price(?float $value): self
    {
        $this->instance->setPrice($value);
        return $this;
    }

    /**
     * Unsets price field.
     */
    public function unsetPrice(): self
    {
        $this->instance->unsetPrice();
        return $this;
    }

    /**
     * Sets coupon id field.
     *
     * @param int|null $value
     */
    public function couponId(?int $value): self
    {
        $this->instance->setCouponId($value);
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
     * Initializes a new Coupon Currency object.
     */
    public function build(): CouponCurrency
    {
        return CoreHelper::clone($this->instance);
    }
}
