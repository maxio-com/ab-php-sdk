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
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new coupon currency request object.
     */
    public function build(): CouponCurrencyRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
