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

class ComponentPricePointAssignment implements \JsonSerializable
{
    /**
     * @var int|string|null
     */
    private $componentId;

    /**
     * @var string|int|null
     */
    private $pricePoint;

    /**
     * Returns Component Id.
     * The component to update. Pass the component ID as an integer, or the component handle as a string
     * with the `handle:` prefix, for example `handle:my-component`. The response returns the value in the
     * same form that you sent.
     *
     * @return int|string|null
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     * The component to update. Pass the component ID as an integer, or the component handle as a string
     * with the `handle:` prefix, for example `handle:my-component`. The response returns the value in the
     * same form that you sent.
     *
     * @maps component_id
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $componentId
     */
    public function setComponentId($componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Price Point.
     *
     * @return string|int|null
     */
    public function getPricePoint()
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @maps price_point
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $pricePoint
     */
    public function setPricePoint($pricePoint): void
    {
        $this->pricePoint = $pricePoint;
    }

    /**
     * Converts the ComponentPricePointAssignment object to a human-readable string representation.
     *
     * @return string The string representation of the ComponentPricePointAssignment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ComponentPricePointAssignment',
            [
                'componentId' => $this->componentId,
                'pricePoint' => $this->pricePoint,
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
        if (isset($this->componentId)) {
            $json['component_id'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->componentId,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->pricePoint)) {
            $json['price_point']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePoint,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
