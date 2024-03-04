<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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
        $json['product_family'] = $this->productFamily;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
