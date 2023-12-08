<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SegmentPrice implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var int|null
     */
    private $startingQuantity;

    /**
     * @var array
     */
    private $endingQuantity = [];

    /**
     * @var string|null
     */
    private $unitPrice;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var string|null
     */
    private $formattedUnitPrice;

    /**
     * @var int|null
     */
    private $segmentId;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Component Id.
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Starting Quantity.
     */
    public function getStartingQuantity(): ?int
    {
        return $this->startingQuantity;
    }

    /**
     * Sets Starting Quantity.
     *
     * @maps starting_quantity
     */
    public function setStartingQuantity(?int $startingQuantity): void
    {
        $this->startingQuantity = $startingQuantity;
    }

    /**
     * Returns Ending Quantity.
     */
    public function getEndingQuantity(): ?int
    {
        if (count($this->endingQuantity) == 0) {
            return null;
        }
        return $this->endingQuantity['value'];
    }

    /**
     * Sets Ending Quantity.
     *
     * @maps ending_quantity
     */
    public function setEndingQuantity(?int $endingQuantity): void
    {
        $this->endingQuantity['value'] = $endingQuantity;
    }

    /**
     * Unsets Ending Quantity.
     */
    public function unsetEndingQuantity(): void
    {
        $this->endingQuantity = [];
    }

    /**
     * Returns Unit Price.
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     *
     * @maps unit_price
     */
    public function setUnitPrice(?string $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Formatted Unit Price.
     */
    public function getFormattedUnitPrice(): ?string
    {
        return $this->formattedUnitPrice;
    }

    /**
     * Sets Formatted Unit Price.
     *
     * @maps formatted_unit_price
     */
    public function setFormattedUnitPrice(?string $formattedUnitPrice): void
    {
        $this->formattedUnitPrice = $formattedUnitPrice;
    }

    /**
     * Returns Segment Id.
     */
    public function getSegmentId(): ?int
    {
        return $this->segmentId;
    }

    /**
     * Sets Segment Id.
     *
     * @maps segment_id
     */
    public function setSegmentId(?int $segmentId): void
    {
        $this->segmentId = $segmentId;
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
        if (isset($this->id)) {
            $json['id']                   = $this->id;
        }
        if (isset($this->componentId)) {
            $json['component_id']         = $this->componentId;
        }
        if (isset($this->startingQuantity)) {
            $json['starting_quantity']    = $this->startingQuantity;
        }
        if (!empty($this->endingQuantity)) {
            $json['ending_quantity']      = $this->endingQuantity['value'];
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']           = $this->unitPrice;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']       = $this->pricePointId;
        }
        if (isset($this->formattedUnitPrice)) {
            $json['formatted_unit_price'] = $this->formattedUnitPrice;
        }
        if (isset($this->segmentId)) {
            $json['segment_id']           = $this->segmentId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
