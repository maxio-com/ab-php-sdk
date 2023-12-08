<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OfferDiscount;
use Core\Utils\CoreHelper;

/**
 * Builder for model OfferDiscount
 *
 * @see OfferDiscount
 */
class OfferDiscountBuilder
{
    /**
     * @var OfferDiscount
     */
    private $instance;

    private function __construct(OfferDiscount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new offer discount Builder object.
     */
    public static function init(): self
    {
        return new self(new OfferDiscount());
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
     * Sets coupon id field.
     */
    public function couponId(?int $value): self
    {
        $this->instance->setCouponId($value);
        return $this;
    }

    /**
     * Sets coupon name field.
     */
    public function couponName(?string $value): self
    {
        $this->instance->setCouponName($value);
        return $this;
    }

    /**
     * Initializes a new offer discount object.
     */
    public function build(): OfferDiscount
    {
        return CoreHelper::clone($this->instance);
    }
}
