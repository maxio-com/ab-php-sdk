<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ComponentCostDataRateTier implements \JsonSerializable
{
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
    private $quantity;

    /**
     * @var string|null
     */
    private $unitPrice;

    /**
     * @var string|null
     */
    private $amount;

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
     * Returns Quantity.
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     */
    public function setQuantity(?string $quantity): void
    {
        $this->quantity = $quantity;
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
     * Returns Amount.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
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
        if (isset($this->startingQuantity)) {
            $json['starting_quantity'] = $this->startingQuantity;
        }
        if (!empty($this->endingQuantity)) {
            $json['ending_quantity']   = $this->endingQuantity['value'];
        }
        if (isset($this->quantity)) {
            $json['quantity']          = $this->quantity;
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']        = $this->unitPrice;
        }
        if (isset($this->amount)) {
            $json['amount']            = $this->amount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
