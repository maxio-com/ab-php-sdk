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

/**
 * Create or update custom pricing unique to the subscription. Used in place of `price_point_id`.
 */
class ComponentCustomPrice implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var string|null
     */
    private $pricingScheme;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var array
     */
    private $intervalUnit = [];

    /**
     * @var Price[]
     */
    private $prices;

    /**
     * @param Price[] $prices
     */
    public function __construct(array $prices)
    {
        $this->prices = $prices;
    }

    /**
     * Returns Tax Included.
     * Whether or not the price point includes tax
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     * Whether or not the price point includes tax
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
    }

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
     * Returns Prices.
     * On/off components only need one price bracket starting at 1
     *
     * @return Price[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     * On/off components only need one price bracket starting at 1
     *
     * @required
     * @maps prices
     *
     * @param Price[] $prices
     */
    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Converts the ComponentCustomPrice object to a human-readable string representation.
     *
     * @return string The string representation of the ComponentCustomPrice object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ComponentCustomPrice',
            [
                'taxIncluded' => $this->taxIncluded,
                'pricingScheme' => $this->pricingScheme,
                'interval' => $this->interval,
                'intervalUnit' => $this->getIntervalUnit(),
                'prices' => $this->prices,
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
        if (isset($this->taxIncluded)) {
            $json['tax_included']   = $this->taxIncluded;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme'] = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->interval)) {
            $json['interval']       = $this->interval;
        }
        if (!empty($this->intervalUnit)) {
            $json['interval_unit']  = IntervalUnit::checkValue($this->intervalUnit['value']);
        }
        $json['prices']             = $this->prices;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
