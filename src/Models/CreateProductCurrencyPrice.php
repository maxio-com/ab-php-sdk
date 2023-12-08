<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateProductCurrencyPrice implements \JsonSerializable
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
     * @var string
     */
    private $role;

    /**
     * @param string $currency
     * @param int $price
     * @param string $role
     */
    public function __construct(string $currency, int $price, string $role)
    {
        $this->currency = $currency;
        $this->price = $price;
        $this->role = $role;
    }

    /**
     * Returns Currency.
     * ISO code for one of the site level currencies.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO code for one of the site level currencies.
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
     * Price for the given role.
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Sets Price.
     * Price for the given role.
     *
     * @required
     * @maps price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * Returns Role.
     * Role for the price.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Sets Role.
     * Role for the price.
     *
     * @required
     * @maps role
     * @factory \AdvancedBillingLib\Models\CurrencyPriceRole::checkValue
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
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
        $json['role']     = CurrencyPriceRole::checkValue($this->role);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
