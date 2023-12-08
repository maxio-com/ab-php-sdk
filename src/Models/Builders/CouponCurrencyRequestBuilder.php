<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponCurrencyRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponCurrencyRequest
 *
 * @see CouponCurrencyRequest
 */
class CouponCurrencyRequestBuilder
{
    /**
     * @var CouponCurrencyRequest
     */
    private $instance;

    private function __construct(CouponCurrencyRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new coupon currency request Builder object.
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new CouponCurrencyRequest($currencyPrices));
    }

    /**
     * Initializes a new coupon currency request object.
     */
    public function build(): CouponCurrencyRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
