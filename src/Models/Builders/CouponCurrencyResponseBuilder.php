<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponCurrency;
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
     * Initializes a new Coupon Currency Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponCurrencyResponse());
    }

    /**
     * Sets currency prices field.
     *
     * @param CouponCurrency[]|null $value
     */
    public function currencyPrices(?array $value): self
    {
        $this->instance->setCurrencyPrices($value);
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
     * Initializes a new Coupon Currency Response object.
     */
    public function build(): CouponCurrencyResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
