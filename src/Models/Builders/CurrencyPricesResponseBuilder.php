<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CurrencyPrice;
use AdvancedBillingLib\Models\CurrencyPricesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CurrencyPricesResponse
 *
 * @see CurrencyPricesResponse
 */
class CurrencyPricesResponseBuilder
{
    /**
     * @var CurrencyPricesResponse
     */
    private $instance;

    private function __construct(CurrencyPricesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Currency Prices Response Builder object.
     *
     * @param CurrencyPrice[] $currencyPrices
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new CurrencyPricesResponse($currencyPrices));
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
     * Initializes a new Currency Prices Response object.
     */
    public function build(): CurrencyPricesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
