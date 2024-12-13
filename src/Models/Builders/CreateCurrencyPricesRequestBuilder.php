<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateCurrencyPrice;
use AdvancedBillingLib\Models\CreateCurrencyPricesRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateCurrencyPricesRequest
 *
 * @see CreateCurrencyPricesRequest
 */
class CreateCurrencyPricesRequestBuilder
{
    /**
     * @var CreateCurrencyPricesRequest
     */
    private $instance;

    private function __construct(CreateCurrencyPricesRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Currency Prices Request Builder object.
     *
     * @param CreateCurrencyPrice[] $currencyPrices
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new CreateCurrencyPricesRequest($currencyPrices));
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
     * Initializes a new Create Currency Prices Request object.
     */
    public function build(): CreateCurrencyPricesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
