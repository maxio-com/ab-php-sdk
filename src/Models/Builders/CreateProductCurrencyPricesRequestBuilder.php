<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateProductCurrencyPrice;
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
     * Initializes a new Create Product Currency Prices Request Builder object.
     *
     * @param CreateProductCurrencyPrice[] $currencyPrices
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new CreateProductCurrencyPricesRequest($currencyPrices));
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
     * Initializes a new Create Product Currency Prices Request object.
     */
    public function build(): CreateProductCurrencyPricesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
