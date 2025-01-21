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

class CreateProductFamilyRequest implements \JsonSerializable
{
    /**
     * @var CreateProductFamily
     */
    private $productFamily;

    /**
     * @param CreateProductFamily $productFamily
     */
    public function __construct(CreateProductFamily $productFamily)
    {
        $this->productFamily = $productFamily;
    }

    /**
     * Returns Product Family.
     */
    public function getProductFamily(): CreateProductFamily
    {
        return $this->productFamily;
    }

    /**
     * Sets Product Family.
     *
     * @required
     * @maps product_family
     */
    public function setProductFamily(CreateProductFamily $productFamily): void
    {
        $this->productFamily = $productFamily;
    }

    /**
     * Converts the CreateProductFamilyRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateProductFamilyRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateProductFamilyRequest',
            ['productFamily' => $this->productFamily, 'additionalProperties' => $this->additionalProperties]
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
        $json['product_family'] = $this->productFamily;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
