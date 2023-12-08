<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class MovementLineItem implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var int|null
     */
    private $mrr;

    /**
     * @var MRRMovement[]|null
     */
    private $mrrMovements;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $prevQuantity;

    /**
     * @var bool|null
     */
    private $recurring;

    /**
     * Returns Product Id.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Component Id.
     * For Product (or "baseline") line items, this field will have a value of `0`.
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     * For Product (or "baseline") line items, this field will have a value of `0`.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
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
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Mrr.
     */
    public function getMrr(): ?int
    {
        return $this->mrr;
    }

    /**
     * Sets Mrr.
     *
     * @maps mrr
     */
    public function setMrr(?int $mrr): void
    {
        $this->mrr = $mrr;
    }

    /**
     * Returns Mrr Movements.
     *
     * @return MRRMovement[]|null
     */
    public function getMrrMovements(): ?array
    {
        return $this->mrrMovements;
    }

    /**
     * Sets Mrr Movements.
     *
     * @maps mrr_movements
     *
     * @param MRRMovement[]|null $mrrMovements
     */
    public function setMrrMovements(?array $mrrMovements): void
    {
        $this->mrrMovements = $mrrMovements;
    }

    /**
     * Returns Quantity.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Prev Quantity.
     */
    public function getPrevQuantity(): ?int
    {
        return $this->prevQuantity;
    }

    /**
     * Sets Prev Quantity.
     *
     * @maps prev_quantity
     */
    public function setPrevQuantity(?int $prevQuantity): void
    {
        $this->prevQuantity = $prevQuantity;
    }

    /**
     * Returns Recurring.
     * When `true`, the line item's MRR value will contribute to the `plan` breakout. When `false`, the
     * line item contributes to the `usage` breakout.
     */
    public function getRecurring(): ?bool
    {
        return $this->recurring;
    }

    /**
     * Sets Recurring.
     * When `true`, the line item's MRR value will contribute to the `plan` breakout. When `false`, the
     * line item contributes to the `usage` breakout.
     *
     * @maps recurring
     */
    public function setRecurring(?bool $recurring): void
    {
        $this->recurring = $recurring;
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
        if (isset($this->productId)) {
            $json['product_id']     = $this->productId;
        }
        if (isset($this->componentId)) {
            $json['component_id']   = $this->componentId;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id'] = $this->pricePointId;
        }
        if (isset($this->name)) {
            $json['name']           = $this->name;
        }
        if (isset($this->mrr)) {
            $json['mrr']            = $this->mrr;
        }
        if (isset($this->mrrMovements)) {
            $json['mrr_movements']  = $this->mrrMovements;
        }
        if (isset($this->quantity)) {
            $json['quantity']       = $this->quantity;
        }
        if (isset($this->prevQuantity)) {
            $json['prev_quantity']  = $this->prevQuantity;
        }
        if (isset($this->recurring)) {
            $json['recurring']      = $this->recurring;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
