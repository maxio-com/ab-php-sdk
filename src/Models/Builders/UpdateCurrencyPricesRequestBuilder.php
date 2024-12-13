<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateCurrencyPrice;
use AdvancedBillingLib\Models\UpdateCurrencyPricesRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateCurrencyPricesRequest
 *
 * @see UpdateCurrencyPricesRequest
 */
class UpdateCurrencyPricesRequestBuilder
{
    /**
     * @var UpdateCurrencyPricesRequest
     */
    private $instance;

    private function __construct(UpdateCurrencyPricesRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Currency Prices Request Builder object.
     *
     * @param UpdateCurrencyPrice[] $currencyPrices
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new UpdateCurrencyPricesRequest($currencyPrices));
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
     * Initializes a new Update Currency Prices Request object.
     */
    public function build(): UpdateCurrencyPricesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
