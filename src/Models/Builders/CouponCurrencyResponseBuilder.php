<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponCurrencyResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponCurrencyResponse
 *
 * @see CouponCurrencyResponse
 */
class CouponCurrencyResponseBuilder
{
    /**
     * @var CouponCurrencyResponse
     */
    private $instance;

    private function __construct(CouponCurrencyResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new coupon currency response Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponCurrencyResponse());
    }

    /**
     * Sets currency prices field.
     */
    public function currencyPrices(?array $value): self
    {
        $this->instance->setCurrencyPrices($value);
        return $this;
    }

    /**
     * Initializes a new coupon currency response object.
     */
    public function build(): CouponCurrencyResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
