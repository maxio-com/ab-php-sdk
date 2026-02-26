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

class ScheduledRenewalItemRequestBodyProduct implements \JsonSerializable
{
    /**
     * @var string
     */
    private $itemType;

    /**
     * @var int
     */
    private $itemId;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var ScheduledRenewalProductPricePoint|null
     */
    private $customPrice;

    /**
     * @param int $itemId
     */
    public function __construct(int $itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * Returns Item Type.
     * Item type to add. Either Product or Component.
     */
    public function getItemType(): string
    {
        return $this->itemType;
    }

    /**
     * Sets Item Type.
     * Item type to add. Either Product or Component.
     *
     * @maps item_type
     */
    public function setItemType(string $itemType): void
    {
        $this->itemType = $itemType;
    }

    /**
     * Returns Item Id.
     * Product or component identifier.
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * Sets Item Id.
     * Product or component identifier.
     *
     * @required
     * @maps item_id
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * Returns Price Point Id.
     * Price point identifier.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     * Price point identifier.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Quantity.
     * Optional quantity for the item.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * Optional quantity for the item.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Custom Price.
     * Custom pricing for a product within a scheduled renewal.
     */
    public function getCustomPrice(): ?ScheduledRenewalProductPricePoint
    {
        return $this->customPrice;
    }

    /**
     * Sets Custom Price.
     * Custom pricing for a product within a scheduled renewal.
     *
     * @maps custom_price
     */
    public function setCustomPrice(?ScheduledRenewalProductPricePoint $customPrice): void
    {
        $this->customPrice = $customPrice;
    }

    /**
     * Converts the ScheduledRenewalItemRequestBodyProduct object to a human-readable string representation.
     *
     * @return string The string representation of the ScheduledRenewalItemRequestBodyProduct object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ScheduledRenewalItemRequestBodyProduct',
            [
                'itemType' => $this->itemType,
                'itemId' => $this->itemId,
                'pricePointId' => $this->pricePointId,
                'quantity' => $this->quantity,
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
        $json['item_type']          = $this->itemType;
        $json['item_id']            = $this->itemId;
        if (isset($this->pricePointId)) {
            $json['price_point_id'] = $this->pricePointId;
        }
        if (isset($this->quantity)) {
            $json['quantity']       = $this->quantity;
        }
        if (isset($this->customPrice)) {
            $json['custom_price']   = $this->customPrice;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
