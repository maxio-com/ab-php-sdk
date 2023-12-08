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
     * Initializes a new coupon currency Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponCurrency());
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
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets price field.
     */
    public function price(?int $value): self
    {
        $this->instance->setPrice($value);
        return $this;
    }

    /**
     * Sets coupon id field.
     */
    public function couponId(?int $value): self
    {
        $this->instance->setCouponId($value);
        return $this;
    }

    /**
     * Initializes a new coupon currency object.
     */
    public function build(): CouponCurrency
    {
        return CoreHelper::clone($this->instance);
    }
}
