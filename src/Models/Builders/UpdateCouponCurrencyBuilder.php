<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateCouponCurrency;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateCouponCurrency
 *
 * @see UpdateCouponCurrency
 */
class UpdateCouponCurrencyBuilder
{
    /**
     * @var UpdateCouponCurrency
     */
    private $instance;

    private function __construct(UpdateCouponCurrency $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update coupon currency Builder object.
     */
    public static function init(string $currency, int $price): self
    {
        return new self(new UpdateCouponCurrency($currency, $price));
    }

    /**
     * Initializes a new update coupon currency object.
     */
    public function build(): UpdateCouponCurrency
    {
        return CoreHelper::clone($this->instance);
    }
}
