<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateCouponCurrency implements \JsonSerializable
{
    /**
     * @var string
     */
    private $currency;

    /**
     * @var int
     */
    private $price;

    /**
     * @param string $currency
     * @param int $price
     */
    public function __construct(string $currency, int $price)
    {
        $this->currency = $currency;
        $this->price = $price;
    }

    /**
     * Returns Currency.
     * ISO code for the site defined currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO code for the site defined currency.
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Price.
     * Price for the given currency.
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Sets Price.
     * Price for the given currency.
     *
     * @required
     * @maps price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
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
        $json['currency'] = $this->currency;
        $json['price']    = $this->price;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
