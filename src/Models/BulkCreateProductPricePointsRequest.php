<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BulkCreateProductPricePointsRequest implements \JsonSerializable
{
    /**
     * @var CreateProductPricePoint[]
     */
    private $pricePoints;

    /**
     * @param CreateProductPricePoint[] $pricePoints
     */
    public function __construct(array $pricePoints)
    {
        $this->pricePoints = $pricePoints;
    }

    /**
     * Returns Price Points.
     *
     * @return CreateProductPricePoint[]
     */
    public function getPricePoints(): array
    {
        return $this->pricePoints;
    }

    /**
     * Sets Price Points.
     *
     * @required
     * @maps price_points
     *
     * @param CreateProductPricePoint[] $pricePoints
     */
    public function setPricePoints(array $pricePoints): void
    {
        $this->pricePoints = $pricePoints;
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
        $json['price_points'] = $this->pricePoints;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
