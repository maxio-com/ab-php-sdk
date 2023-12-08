<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class OfferItem implements \JsonSerializable
{
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
    private $startingQuantity;

    /**
     * @var bool|null
     */
    private $editable;

    /**
     * @var string|null
     */
    private $componentUnitPrice;

    /**
     * @var string|null
     */
    private $componentName;

    /**
     * @var string|null
     */
    private $pricePointName;

    /**
     * @var CurrencyPrice[]|null
     */
    private $currencyPrices;

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
     * Returns Starting Quantity.
     */
    public function getStartingQuantity(): ?string
    {
        return $this->startingQuantity;
    }

    /**
     * Sets Starting Quantity.
     *
     * @maps starting_quantity
     */
    public function setStartingQuantity(?string $startingQuantity): void
    {
        $this->startingQuantity = $startingQuantity;
    }

    /**
     * Returns Editable.
     */
    public function getEditable(): ?bool
    {
        return $this->editable;
    }

    /**
     * Sets Editable.
     *
     * @maps editable
     */
    public function setEditable(?bool $editable): void
    {
        $this->editable = $editable;
    }

    /**
     * Returns Component Unit Price.
     */
    public function getComponentUnitPrice(): ?string
    {
        return $this->componentUnitPrice;
    }

    /**
     * Sets Component Unit Price.
     *
     * @maps component_unit_price
     */
    public function setComponentUnitPrice(?string $componentUnitPrice): void
    {
        $this->componentUnitPrice = $componentUnitPrice;
    }

    /**
     * Returns Component Name.
     */
    public function getComponentName(): ?string
    {
        return $this->componentName;
    }

    /**
     * Sets Component Name.
     *
     * @maps component_name
     */
    public function setComponentName(?string $componentName): void
    {
        $this->componentName = $componentName;
    }

    /**
     * Returns Price Point Name.
     */
    public function getPricePointName(): ?string
    {
        return $this->pricePointName;
    }

    /**
     * Sets Price Point Name.
     *
     * @maps price_point_name
     */
    public function setPricePointName(?string $pricePointName): void
    {
        $this->pricePointName = $pricePointName;
    }

    /**
     * Returns Currency Prices.
     *
     * @return CurrencyPrice[]|null
     */
    public function getCurrencyPrices(): ?array
    {
        return $this->currencyPrices;
    }

    /**
     * Sets Currency Prices.
     *
     * @maps currency_prices
     *
     * @param CurrencyPrice[]|null $currencyPrices
     */
    public function setCurrencyPrices(?array $currencyPrices): void
    {
        $this->currencyPrices = $currencyPrices;
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
            $json['component_id']         = $this->componentId;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']       = $this->pricePointId;
        }
        if (isset($this->startingQuantity)) {
            $json['starting_quantity']    = $this->startingQuantity;
        }
        if (isset($this->editable)) {
            $json['editable']             = $this->editable;
        }
        if (isset($this->componentUnitPrice)) {
            $json['component_unit_price'] = $this->componentUnitPrice;
        }
        if (isset($this->componentName)) {
            $json['component_name']       = $this->componentName;
        }
        if (isset($this->pricePointName)) {
            $json['price_point_name']     = $this->pricePointName;
        }
        if (isset($this->currencyPrices)) {
            $json['currency_prices']      = $this->currencyPrices;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
