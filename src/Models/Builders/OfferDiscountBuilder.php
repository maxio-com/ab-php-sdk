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
     * Initializes a new Offer Discount Builder object.
     */
    public static function init(): self
    {
        return new self(new OfferDiscount());
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
     * Sets coupon name field.
     *
     * @param string|null $value
     */
    public function couponName(?string $value): self
    {
        $this->instance->setCouponName($value);
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
     * Initializes a new Offer Discount object.
     */
    public function build(): OfferDiscount
    {
        return CoreHelper::clone($this->instance);
    }
}
