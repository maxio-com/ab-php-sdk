<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProductPricePointCurrencyPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProductPricePointCurrencyPrice
 *
 * @see ProductPricePointCurrencyPrice
 */
class ProductPricePointCurrencyPriceBuilder
{
    /**
     * @var ProductPricePointCurrencyPrice
     */
    private $instance;

    private function __construct(ProductPricePointCurrencyPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new product price point currency price Builder object.
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new ProductPricePointCurrencyPrice($currencyPrices));
    }

    /**
     * Initializes a new product price point currency price object.
     */
    public function build(): ProductPricePointCurrencyPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
