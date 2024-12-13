<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCurrencyPrice;
use AdvancedBillingLib\Models\ComponentCurrencyPricesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentCurrencyPricesResponse
 *
 * @see ComponentCurrencyPricesResponse
 */
class ComponentCurrencyPricesResponseBuilder
{
    /**
     * @var ComponentCurrencyPricesResponse
     */
    private $instance;

    private function __construct(ComponentCurrencyPricesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Currency Prices Response Builder object.
     *
     * @param ComponentCurrencyPrice[] $currencyPrices
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new ComponentCurrencyPricesResponse($currencyPrices));
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
     * Initializes a new Component Currency Prices Response object.
     */
    public function build(): ComponentCurrencyPricesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
