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

class PrepaidProductPricePointFilter implements \JsonSerializable
{
    /**
     * @var string
     */
    private $productPricePointId;

    /**
     * Returns Product Price Point Id.
     * Passed as a parameter to list methods to return only non null values.
     */
    public function getProductPricePointId(): string
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     * Passed as a parameter to list methods to return only non null values.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(string $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Converts the PrepaidProductPricePointFilter object to a human-readable string representation.
     *
     * @return string The string representation of the PrepaidProductPricePointFilter object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PrepaidProductPricePointFilter',
            [
                'productPricePointId' => $this->productPricePointId,
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
        $json['product_price_point_id'] = $this->productPricePointId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
