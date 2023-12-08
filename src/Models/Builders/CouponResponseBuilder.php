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
     * Initializes a new coupon response Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponResponse());
    }

    /**
     * Sets coupon field.
     */
    public function coupon(?Coupon $value): self
    {
        $this->instance->setCoupon($value);
        return $this;
    }

    /**
     * Initializes a new coupon response object.
     */
    public function build(): CouponResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
