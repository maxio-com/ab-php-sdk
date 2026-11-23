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

class Price1 implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $startingQuantity;

    /**
     * @var array
     */
    private $endingQuantity = [];

    /**
     * @var string|null
     */
    private $unitPrice;

    /**
     * Returns Starting Quantity.
     */
    public function getStartingQuantity(): ?int
    {
        return $this->startingQuantity;
    }

    /**
     * Sets Starting Quantity.
     *
     * @maps starting_quantity
     */
    public function setStartingQuantity(?int $startingQuantity): void
    {
        $this->startingQuantity = $startingQuantity;
    }

    /**
     * Returns Ending Quantity.
     */
    public function getEndingQuantity(): ?int
    {
        if (count($this->endingQuantity) == 0) {
            return null;
        }
        return $this->endingQuantity['value'];
    }

    /**
     * Sets Ending Quantity.
     *
     * @maps ending_quantity
     */
    public function setEndingQuantity(?int $endingQuantity): void
    {
        $this->endingQuantity['value'] = $endingQuantity;
    }

    /**
     * Unsets Ending Quantity.
     */
    public function unsetEndingQuantity(): void
    {
        $this->endingQuantity = [];
    }

    /**
     * Returns Unit Price.
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     *
     * @maps unit_price
     */
    public function setUnitPrice(?string $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Converts the Price1 object to a human-readable string representation.
     *
     * @return string The string representation of the Price1 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Price1',
            [
                'startingQuantity' => $this->startingQuantity,
                'endingQuantity' => $this->getEndingQuantity(),
                'unitPrice' => $this->unitPrice,
                'additionalProperties' => $this->additionalProperties
            ]
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
        if (isset($this->startingQuantity)) {
            $json['starting_quantity'] = $this->startingQuantity;
        }
        if (!empty($this->endingQuantity)) {
            $json['ending_quantity']   = $this->endingQuantity['value'];
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']        = $this->unitPrice;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
