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

class CreateSubscriptionComponent implements \JsonSerializable
{
    /**
     * @var int|string|null
     */
    private $componentId;

    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var int|null
     */
    private $unitBalance;

    /**
     * @var int|null
     */
    private $allocatedQuantity;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var int|string|null
     */
    private $pricePointId;

    /**
     * @var ComponentCustomPrice|null
     */
    private $customPrice;

    /**
     * Returns Component Id.
     *
     * @return int|string|null
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
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
     * Returns Enabled.
     * Used for on/off components only.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Used for on/off components only.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Unit Balance.
     * Used for metered and events based components.
     */
    public function getUnitBalance(): ?int
    {
        return $this->unitBalance;
    }

    /**
     * Sets Unit Balance.
     * Used for metered and events based components.
     *
     * @maps unit_balance
     */
    public function setUnitBalance(?int $unitBalance): void
    {
        $this->unitBalance = $unitBalance;
    }

    /**
     * Returns Allocated Quantity.
     * Used for quantity based components.
     */
    public function getAllocatedQuantity(): ?int
    {
        return $this->allocatedQuantity;
    }

    /**
     * Sets Allocated Quantity.
     * Used for quantity based components.
     *
     * @maps allocated_quantity
     */
    public function setAllocatedQuantity(?int $allocatedQuantity): void
    {
        $this->allocatedQuantity = $allocatedQuantity;
    }

    /**
     * Returns Quantity.
     * Deprecated. Use `allocated_quantity` instead.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * Deprecated. Use `allocated_quantity` instead.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Price Point Id.
     *
     * @return int|string|null
     */
    public function getPricePointId()
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $pricePointId
     */
    public function setPricePointId($pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Custom Price.
     * Create or update custom pricing unique to the subscription. Used in place of `price_point_id`.
     */
    public function getCustomPrice(): ?ComponentCustomPrice
    {
        return $this->customPrice;
    }

    /**
     * Sets Custom Price.
     * Create or update custom pricing unique to the subscription. Used in place of `price_point_id`.
     *
     * @maps custom_price
     */
    public function setCustomPrice(?ComponentCustomPrice $customPrice): void
    {
        $this->customPrice = $customPrice;
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
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->enabled)) {
            $json['enabled']            = $this->enabled;
        }
        if (isset($this->unitBalance)) {
            $json['unit_balance']       = $this->unitBalance;
        }
        if (isset($this->allocatedQuantity)) {
            $json['allocated_quantity'] = $this->allocatedQuantity;
        }
        if (isset($this->quantity)) {
            $json['quantity']           = $this->quantity;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']     =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePointId,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->customPrice)) {
            $json['custom_price']       = $this->customPrice;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
