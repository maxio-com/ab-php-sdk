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

class SubscriptionGroupSignupComponent implements \JsonSerializable
{
    /**
     * @var string|int|null
     */
    private $componentId;

    /**
     * @var string|int|null
     */
    private $allocatedQuantity;

    /**
     * @var string|int|null
     */
    private $unitBalance;

    /**
     * @var string|int|null
     */
    private $pricePointId;

    /**
     * @var SubscriptionGroupComponentCustomPrice|null
     */
    private $customPrice;

    /**
     * Returns Component Id.
     * Required if passing any component to `components` attribute.
     *
     * @return string|int|null
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     * Required if passing any component to `components` attribute.
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
     * Returns Allocated Quantity.
     *
     * @return string|int|null
     */
    public function getAllocatedQuantity()
    {
        return $this->allocatedQuantity;
    }

    /**
     * Sets Allocated Quantity.
     *
     * @maps allocated_quantity
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $allocatedQuantity
     */
    public function setAllocatedQuantity($allocatedQuantity): void
    {
        $this->allocatedQuantity = $allocatedQuantity;
    }

    /**
     * Returns Unit Balance.
     *
     * @return string|int|null
     */
    public function getUnitBalance()
    {
        return $this->unitBalance;
    }

    /**
     * Sets Unit Balance.
     *
     * @maps unit_balance
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $unitBalance
     */
    public function setUnitBalance($unitBalance): void
    {
        $this->unitBalance = $unitBalance;
    }

    /**
     * Returns Price Point Id.
     *
     * @return string|int|null
     */
    public function getPricePointId()
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
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
     * Returns Custom Price.
     * Used in place of `price_point_id` to define a custom price point unique to the subscription. You
     * still need to provide `component_id`.
     */
    public function getCustomPrice(): ?SubscriptionGroupComponentCustomPrice
    {
        return $this->customPrice;
    }

    /**
     * Sets Custom Price.
     * Used in place of `price_point_id` to define a custom price point unique to the subscription. You
     * still need to provide `component_id`.
     *
     * @maps custom_price
     */
    public function setCustomPrice(?SubscriptionGroupComponentCustomPrice $customPrice): void
    {
        $this->customPrice = $customPrice;
    }

    /**
     * Converts the SubscriptionGroupSignupComponent object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionGroupSignupComponent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionGroupSignupComponent',
            [
                'componentId' => $this->componentId,
                'allocatedQuantity' => $this->allocatedQuantity,
                'unitBalance' => $this->unitBalance,
                'pricePointId' => $this->pricePointId,
                'customPrice' => $this->customPrice,
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
            $json['component_id']       =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->componentId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->allocatedQuantity)) {
            $json['allocated_quantity'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->allocatedQuantity,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->unitBalance)) {
            $json['unit_balance']       =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->unitBalance,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']     =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePointId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->customPrice)) {
            $json['custom_price']       = $this->customPrice;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
