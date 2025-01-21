<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class UpdateCurrencyPrice implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $price;

    /**
     * @param int $id
     * @param float $price
     */
    public function __construct(int $id, float $price)
    {
        $this->id = $id;
        $this->price = $price;
    }

    /**
     * Returns Id.
     * ID of the currency price record being updated
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * ID of the currency price record being updated
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Price.
     * New price for the given currency
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Sets Price.
     * New price for the given currency
     *
     * @required
     * @maps price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * Converts the UpdateCurrencyPrice object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateCurrencyPrice object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateCurrencyPrice',
            ['id' => $this->id, 'price' => $this->price, 'additionalProperties' => $this->additionalProperties]
        );
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
        $json['id']    = $this->id;
        $json['price'] = $this->price;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
