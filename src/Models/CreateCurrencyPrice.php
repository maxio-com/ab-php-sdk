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
     * @var float|null
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
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Sets Price.
     * Price for the price level in this currency
     *
     * @maps price
     */
    public function setPrice(?float $price): void
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
        if (isset($this->currency)) {
            $json['currency'] = $this->currency;
        }
        if (isset($this->price)) {
            $json['price']    = $this->price;
        }
        if (isset($this->priceId)) {
            $json['price_id'] = $this->priceId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
