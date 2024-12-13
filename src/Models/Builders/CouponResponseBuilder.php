<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CouponResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponResponse
 *
 * @see CouponResponse
 */
class CouponResponseBuilder
{
    /**
     * @var CouponResponse
     */
    private $instance;

    private function __construct(CouponResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Coupon Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponResponse());
    }

    /**
     * Sets coupon field.
     *
     * @param Coupon|null $value
     */
    public function coupon(?Coupon $value): self
    {
        $this->instance->setCoupon($value);
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
     * Initializes a new Coupon Response object.
     */
    public function build(): CouponResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
