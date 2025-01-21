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

class Price implements \JsonSerializable
{
    /**
     * @var int|string
     */
    private $startingQuantity;

    /**
     * @var array
     */
    private $endingQuantity = [];

    /**
     * @var float|string
     */
    private $unitPrice;

    /**
     * @param int|string $startingQuantity
     * @param float|string $unitPrice
     */
    public function __construct($startingQuantity, $unitPrice)
    {
        $this->startingQuantity = $startingQuantity;
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Starting Quantity.
     *
     * @return int|string
     */
    public function getStartingQuantity()
    {
        return $this->startingQuantity;
    }

    /**
     * Sets Starting Quantity.
     *
     * @required
     * @maps starting_quantity
     * @mapsBy oneOf(int,string)
     *
     * @param int|string $startingQuantity
     */
    public function setStartingQuantity($startingQuantity): void
    {
        $this->startingQuantity = $startingQuantity;
    }

    /**
     * Returns Ending Quantity.
     *
     * @return int|string|null
     */
    public function getEndingQuantity()
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
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $endingQuantity
     */
    public function setEndingQuantity($endingQuantity): void
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
     * The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @return float|string
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
     * @mapsBy oneOf(float,string)
     *
     * @param float|string $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Converts the Price object to a human-readable string representation.
     *
     * @return string The string representation of the Price object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Price',
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
        $json['starting_quantity']   =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->startingQuantity,
                'oneOf(int,string)'
            );
        if (!empty($this->endingQuantity)) {
            $json['ending_quantity'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->endingQuantity['value'],
                    'anyOf(oneOf(int,string),null)'
                );
        }
        $json['unit_price']          = ApiHelper::getJsonHelper()->verifyTypes($this->unitPrice, 'oneOf(float,string)');
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
