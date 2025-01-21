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

class CreateOrUpdateSegmentPrice implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $startingQuantity;

    /**
     * @var int|null
     */
    private $endingQuantity;

    /**
     * @var string|float
     */
    private $unitPrice;

    /**
     * @param string|float $unitPrice
     */
    public function __construct($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

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
        return $this->endingQuantity;
    }

    /**
     * Sets Ending Quantity.
     *
     * @maps ending_quantity
     */
    public function setEndingQuantity(?int $endingQuantity): void
    {
        $this->endingQuantity = $endingQuantity;
    }

    /**
     * Returns Unit Price.
     * The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @return string|float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @required
     * @maps unit_price
     * @mapsBy oneOf(string,float)
     *
     * @param string|float $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Converts the CreateOrUpdateSegmentPrice object to a human-readable string representation.
     *
     * @return string The string representation of the CreateOrUpdateSegmentPrice object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateOrUpdateSegmentPrice',
            [
                'startingQuantity' => $this->startingQuantity,
                'endingQuantity' => $this->endingQuantity,
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
        if (isset($this->endingQuantity)) {
            $json['ending_quantity']   = $this->endingQuantity;
        }
        $json['unit_price']            =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->unitPrice,
                'oneOf(string,float)'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
