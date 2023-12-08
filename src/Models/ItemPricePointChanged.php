<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ItemPricePointChanged implements \JsonSerializable
{
    /**
     * @var int
     */
    private $itemId;

    /**
     * @var string
     */
    private $itemType;

    /**
     * @var string
     */
    private $itemHandle;

    /**
     * @var string
     */
    private $itemName;

    /**
     * @var ItemPricePointData
     */
    private $previousPricePoint;

    /**
     * @var ItemPricePointData
     */
    private $currentPricePoint;

    /**
     * @param int $itemId
     * @param string $itemType
     * @param string $itemHandle
     * @param string $itemName
     * @param ItemPricePointData $previousPricePoint
     * @param ItemPricePointData $currentPricePoint
     */
    public function __construct(
        int $itemId,
        string $itemType,
        string $itemHandle,
        string $itemName,
        ItemPricePointData $previousPricePoint,
        ItemPricePointData $currentPricePoint
    ) {
        $this->itemId = $itemId;
        $this->itemType = $itemType;
        $this->itemHandle = $itemHandle;
        $this->itemName = $itemName;
        $this->previousPricePoint = $previousPricePoint;
        $this->currentPricePoint = $currentPricePoint;
    }

    /**
     * Returns Item Id.
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * Sets Item Id.
     *
     * @required
     * @maps item_id
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * Returns Item Type.
     */
    public function getItemType(): string
    {
        return $this->itemType;
    }

    /**
     * Sets Item Type.
     *
     * @required
     * @maps item_type
     */
    public function setItemType(string $itemType): void
    {
        $this->itemType = $itemType;
    }

    /**
     * Returns Item Handle.
     */
    public function getItemHandle(): string
    {
        return $this->itemHandle;
    }

    /**
     * Sets Item Handle.
     *
     * @required
     * @maps item_handle
     */
    public function setItemHandle(string $itemHandle): void
    {
        $this->itemHandle = $itemHandle;
    }

    /**
     * Returns Item Name.
     */
    public function getItemName(): string
    {
        return $this->itemName;
    }

    /**
     * Sets Item Name.
     *
     * @required
     * @maps item_name
     */
    public function setItemName(string $itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * Returns Previous Price Point.
     */
    public function getPreviousPricePoint(): ItemPricePointData
    {
        return $this->previousPricePoint;
    }

    /**
     * Sets Previous Price Point.
     *
     * @required
     * @maps previous_price_point
     */
    public function setPreviousPricePoint(ItemPricePointData $previousPricePoint): void
    {
        $this->previousPricePoint = $previousPricePoint;
    }

    /**
     * Returns Current Price Point.
     */
    public function getCurrentPricePoint(): ItemPricePointData
    {
        return $this->currentPricePoint;
    }

    /**
     * Sets Current Price Point.
     *
     * @required
     * @maps current_price_point
     */
    public function setCurrentPricePoint(ItemPricePointData $currentPricePoint): void
    {
        $this->currentPricePoint = $currentPricePoint;
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
        $json['item_id']              = $this->itemId;
        $json['item_type']            = $this->itemType;
        $json['item_handle']          = $this->itemHandle;
        $json['item_name']            = $this->itemName;
        $json['previous_price_point'] = $this->previousPricePoint;
        $json['current_price_point']  = $this->currentPricePoint;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
