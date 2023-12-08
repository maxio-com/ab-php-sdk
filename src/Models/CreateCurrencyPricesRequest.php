<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateCurrencyPricesRequest implements \JsonSerializable
{
    /**
     * @var CreateCurrencyPrice[]
     */
    private $currencyPrices;

    /**
     * @param CreateCurrencyPrice[] $currencyPrices
     */
    public function __construct(array $currencyPrices)
    {
        $this->currencyPrices = $currencyPrices;
    }

    /**
     * Returns Currency Prices.
     *
     * @return CreateCurrencyPrice[]
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
     * @param CreateCurrencyPrice[] $currencyPrices
     */
    public function setCurrencyPrices(array $currencyPrices): void
    {
        $this->currencyPrices = $currencyPrices;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
