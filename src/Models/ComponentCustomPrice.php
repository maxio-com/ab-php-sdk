<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Create or update custom pricing unique to the subscription. Used in place of `price_point_id`.
 */
class ComponentCustomPrice implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $pricingScheme;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

    /**
     * @var Price[]|null
     */
    private $prices;

    /**
     * Returns Pricing Scheme.
     * Omit for On/Off components
     */
    public function getPricingScheme(): ?string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * Omit for On/Off components
     *
     * @maps pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setPricingScheme(?string $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
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
        return $this->intervalUnit;
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
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Prices.
     * On/off components only need one price bracket starting at 1
     *
     * @return Price[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     * On/off components only need one price bracket starting at 1
     *
     * @maps prices
     *
     * @param Price[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme'] = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->interval)) {
            $json['interval']       = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']  = IntervalUnit::checkValue($this->intervalUnit);
        }
        if (isset($this->prices)) {
            $json['prices']         = $this->prices;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
