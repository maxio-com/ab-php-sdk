<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateQuantityBasedComponent implements \JsonSerializable
{
    /**
     * @var QuantityBasedComponent
     */
    private $quantityBasedComponent;

    /**
     * @param QuantityBasedComponent $quantityBasedComponent
     */
    public function __construct(QuantityBasedComponent $quantityBasedComponent)
    {
        $this->quantityBasedComponent = $quantityBasedComponent;
    }

    /**
     * Returns Quantity Based Component.
     */
    public function getQuantityBasedComponent(): QuantityBasedComponent
    {
        return $this->quantityBasedComponent;
    }

    /**
     * Sets Quantity Based Component.
     *
     * @required
     * @maps quantity_based_component
     */
    public function setQuantityBasedComponent(QuantityBasedComponent $quantityBasedComponent): void
    {
        $this->quantityBasedComponent = $quantityBasedComponent;
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
        $json['quantity_based_component'] = $this->quantityBasedComponent;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
