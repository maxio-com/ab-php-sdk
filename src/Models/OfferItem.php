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
     * @var int|null
     */
    private $interval;

    /**
     * @var array
     */
    private $intervalUnit = [];

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
     * Returns Interval.
     * The numerical interval. i.e. an interval of '30' coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of '30' coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     */
    public function getIntervalUnit(): ?string
    {
        if (count($this->intervalUnit) == 0) {
            return null;
        }
        return $this->intervalUnit['value'];
    }

    /**
     * Sets Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     *
     * @maps interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit['value'] = $intervalUnit;
    }

    /**
     * Unsets Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     */
    public function unsetIntervalUnit(): void
    {
        $this->intervalUnit = [];
    }

    /**
     * Converts the OfferItem object to a human-readable string representation.
     *
     * @return string The string representation of the OfferItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OfferItem',
            [
                'componentId' => $this->componentId,
                'pricePointId' => $this->pricePointId,
                'startingQuantity' => $this->startingQuantity,
                'editable' => $this->editable,
                'componentUnitPrice' => $this->componentUnitPrice,
                'componentName' => $this->componentName,
                'pricePointName' => $this->pricePointName,
                'currencyPrices' => $this->currencyPrices,
                'interval' => $this->interval,
                'intervalUnit' => $this->getIntervalUnit(),
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
        if (isset($this->interval)) {
            $json['interval']             = $this->interval;
        }
        if (!empty($this->intervalUnit)) {
            $json['interval_unit']        = IntervalUnit::checkValue($this->intervalUnit['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
