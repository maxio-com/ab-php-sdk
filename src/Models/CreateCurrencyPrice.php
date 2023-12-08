<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateCurrencyPrice implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var int|null
     */
    private $price;

    /**
     * @var int|null
     */
    private $priceId;

    /**
     * Returns Currency.
     * ISO code for a currency defined on the site level
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO code for a currency defined on the site level
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Price.
     * Price for the price level in this currency
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * Sets Price.
     * Price for the price level in this currency
     *
     * @maps price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    /**
     * Returns Price Id.
     * ID of the price that this corresponds with
     */
    public function getPriceId(): ?int
    {
        return $this->priceId;
    }

    /**
     * Sets Price Id.
     * ID of the price that this corresponds with
     *
     * @maps price_id
     */
    public function setPriceId(?int $priceId): void
    {
        $this->priceId = $priceId;
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
        if (isset($this->currency)) {
            $json['currency'] = $this->currency;
        }
        if (isset($this->price)) {
            $json['price']    = $this->price;
        }
        if (isset($this->priceId)) {
            $json['price_id'] = $this->priceId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
