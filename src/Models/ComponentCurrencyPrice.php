<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ComponentCurrencyPrice implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $price;

    /**
     * @var string|null
     */
    private $formattedPrice;

    /**
     * @var int|null
     */
    private $priceId;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Price.
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * Sets Price.
     *
     * @maps price
     */
    public function setPrice(?string $price): void
    {
        $this->price = $price;
    }

    /**
     * Returns Formatted Price.
     */
    public function getFormattedPrice(): ?string
    {
        return $this->formattedPrice;
    }

    /**
     * Sets Formatted Price.
     *
     * @maps formatted_price
     */
    public function setFormattedPrice(?string $formattedPrice): void
    {
        $this->formattedPrice = $formattedPrice;
    }

    /**
     * Returns Price Id.
     */
    public function getPriceId(): ?int
    {
        return $this->priceId;
    }

    /**
     * Sets Price Id.
     *
     * @maps price_id
     */
    public function setPriceId(?int $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        if (isset($this->id)) {
            $json['id']              = $this->id;
        }
        if (isset($this->currency)) {
            $json['currency']        = $this->currency;
        }
        if (isset($this->price)) {
            $json['price']           = $this->price;
        }
        if (isset($this->formattedPrice)) {
            $json['formatted_price'] = $this->formattedPrice;
        }
        if (isset($this->priceId)) {
            $json['price_id']        = $this->priceId;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']  = $this->pricePointId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
