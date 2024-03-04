<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ComponentCurrencyPricesResponse implements \JsonSerializable
{
    /**
     * @var ComponentCurrencyPrice[]
     */
    private $currencyPrices;

    /**
     * @param ComponentCurrencyPrice[] $currencyPrices
     */
    public function __construct(array $currencyPrices)
    {
        $this->currencyPrices = $currencyPrices;
    }

    /**
     * Returns Currency Prices.
     *
     * @return ComponentCurrencyPrice[]
     */
    public function getCurrencyPrices(): array
    {
        return $this->currencyPrices;
    }

    /**
     * Sets Currency Prices.
     *
     * @required
     * @maps currency_prices
     *
     * @param ComponentCurrencyPrice[] $currencyPrices
     */
    public function setCurrencyPrices(array $currencyPrices): void
    {
        $this->currencyPrices = $currencyPrices;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['currency_prices'] = $this->currencyPrices;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
