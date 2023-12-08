<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateProductCurrencyPricesRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateProductCurrencyPricesRequest
 *
 * @see CreateProductCurrencyPricesRequest
 */
class CreateProductCurrencyPricesRequestBuilder
{
    /**
     * @var CreateProductCurrencyPricesRequest
     */
    private $instance;

    private function __construct(CreateProductCurrencyPricesRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create product currency prices request Builder object.
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new CreateProductCurrencyPricesRequest($currencyPrices));
    }

    /**
     * Initializes a new create product currency prices request object.
     */
    public function build(): CreateProductCurrencyPricesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
