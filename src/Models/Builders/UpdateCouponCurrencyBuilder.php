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
     * Initializes a new Update Coupon Currency Builder object.
     *
     * @param string $currency
     * @param int $price
     */
    public static function init(string $currency, int $price): self
    {
        return new self(new UpdateCouponCurrency($currency, $price));
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
     * Initializes a new Update Coupon Currency object.
     */
    public function build(): UpdateCouponCurrency
    {
        return CoreHelper::clone($this->instance);
    }
}
