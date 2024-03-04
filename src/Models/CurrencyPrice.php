<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CurrencyPrice implements \JsonSerializable
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
     * @var float|null
     */
    private $price;

    /**
     * @var string|null
     */
    private $formattedPrice;

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var string|null
     */
    private $role;

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
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Sets Price.
     *
     * @maps price
     */
    public function setPrice(?float $price): void
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
     * Returns Product Price Point Id.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Role.
     * Role for the price.
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Sets Role.
     * Role for the price.
     *
     * @maps role
     * @factory \AdvancedBillingLib\Models\CurrencyPriceRole::checkValue
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
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
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->currency)) {
            $json['currency']               = $this->currency;
        }
        if (isset($this->price)) {
            $json['price']                  = $this->price;
        }
        if (isset($this->formattedPrice)) {
            $json['formatted_price']        = $this->formattedPrice;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id'] = $this->productPricePointId;
        }
        if (isset($this->role)) {
            $json['role']                   = CurrencyPriceRole::checkValue($this->role);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
