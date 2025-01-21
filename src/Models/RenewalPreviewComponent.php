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

class RenewalPreviewComponent implements \JsonSerializable
{
    /**
     * @var string|int|null
     */
    private $componentId;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var string|int|null
     */
    private $pricePointId;

    /**
     * Returns Component Id.
     * Either the component's Chargify id or its handle prefixed with `handle:`
     *
     * @return string|int|null
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     * Either the component's Chargify id or its handle prefixed with `handle:`
     *
     * @maps component_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $componentId
     */
    public function setComponentId($componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Quantity.
     * The quantity for which you wish to preview billing. This is useful if you want to preview a
     * predicted, higher usage value than is currently present on the subscription.
     *
     * This quantity represents:
     *
     * - Whether or not an on/off component is enabled - use 0 for disabled or 1 for enabled
     * - The desired allocated_quantity for a quantity-based component
     * - The desired unit_balance for a metered component
     * - The desired metric quantity for an events-based component
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The quantity for which you wish to preview billing. This is useful if you want to preview a
     * predicted, higher usage value than is currently present on the subscription.
     *
     * This quantity represents:
     *
     * - Whether or not an on/off component is enabled - use 0 for disabled or 1 for enabled
     * - The desired allocated_quantity for a quantity-based component
     * - The desired unit_balance for a metered component
     * - The desired metric quantity for an events-based component
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Price Point Id.
     * Either the component price point's Chargify id or its handle prefixed with `handle:`
     *
     * @return string|int|null
     */
    public function getPricePointId()
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     * Either the component price point's Chargify id or its handle prefixed with `handle:`
     *
     * @maps price_point_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $pricePointId
     */
    public function setPricePointId($pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Converts the RenewalPreviewComponent object to a human-readable string representation.
     *
     * @return string The string representation of the RenewalPreviewComponent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RenewalPreviewComponent',
            [
                'componentId' => $this->componentId,
                'quantity' => $this->quantity,
                'pricePointId' => $this->pricePointId,
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
            $json['component_id']   =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->componentId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->quantity)) {
            $json['quantity']       = $this->quantity;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePointId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
