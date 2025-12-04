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
     * @var bool|null
     */
    private $renewPrepaidAllocation;

    /**
     * @var bool|null
     */
    private $rolloverPrepaidRemainder;

    /**
     * @var array
     */
    private $expirationInterval = [];

    /**
     * @var array
     */
    private $expirationIntervalUnit = [];

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
     * Returns Renew Prepaid Allocation.
     * Applicable only to prepaid usage components. Controls whether the allocated quantity renews each
     * period.
     */
    public function getRenewPrepaidAllocation(): ?bool
    {
        return $this->renewPrepaidAllocation;
    }

    /**
     * Sets Renew Prepaid Allocation.
     * Applicable only to prepaid usage components. Controls whether the allocated quantity renews each
     * period.
     *
     * @maps renew_prepaid_allocation
     */
    public function setRenewPrepaidAllocation(?bool $renewPrepaidAllocation): void
    {
        $this->renewPrepaidAllocation = $renewPrepaidAllocation;
    }

    /**
     * Returns Rollover Prepaid Remainder.
     * Applicable only to prepaid usage components. Controls whether remaining units roll over to the next
     * period.
     */
    public function getRolloverPrepaidRemainder(): ?bool
    {
        return $this->rolloverPrepaidRemainder;
    }

    /**
     * Sets Rollover Prepaid Remainder.
     * Applicable only to prepaid usage components. Controls whether remaining units roll over to the next
     * period.
     *
     * @maps rollover_prepaid_remainder
     */
    public function setRolloverPrepaidRemainder(?bool $rolloverPrepaidRemainder): void
    {
        $this->rolloverPrepaidRemainder = $rolloverPrepaidRemainder;
    }

    /**
     * Returns Expiration Interval.
     * Applicable only when rollover is enabled. Number of `expiration_interval_unit`s after which rollover
     * amounts expire.
     */
    public function getExpirationInterval(): ?int
    {
        if (count($this->expirationInterval) == 0) {
            return null;
        }
        return $this->expirationInterval['value'];
    }

    /**
     * Sets Expiration Interval.
     * Applicable only when rollover is enabled. Number of `expiration_interval_unit`s after which rollover
     * amounts expire.
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?int $expirationInterval): void
    {
        $this->expirationInterval['value'] = $expirationInterval;
    }

    /**
     * Unsets Expiration Interval.
     * Applicable only when rollover is enabled. Number of `expiration_interval_unit`s after which rollover
     * amounts expire.
     */
    public function unsetExpirationInterval(): void
    {
        $this->expirationInterval = [];
    }

    /**
     * Returns Expiration Interval Unit.
     * Applicable only when rollover is enabled. Interval unit for rollover expiration (month or day).
     */
    public function getExpirationIntervalUnit(): ?string
    {
        if (count($this->expirationIntervalUnit) == 0) {
            return null;
        }
        return $this->expirationIntervalUnit['value'];
    }

    /**
     * Sets Expiration Interval Unit.
     * Applicable only when rollover is enabled. Interval unit for rollover expiration (month or day).
     *
     * @maps expiration_interval_unit
     * @factory \AdvancedBillingLib\Models\ExpirationIntervalUnit::checkValue
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit['value'] = $expirationIntervalUnit;
    }

    /**
     * Unsets Expiration Interval Unit.
     * Applicable only when rollover is enabled. Interval unit for rollover expiration (month or day).
     */
    public function unsetExpirationIntervalUnit(): void
    {
        $this->expirationIntervalUnit = [];
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
                'renewPrepaidAllocation' => $this->renewPrepaidAllocation,
                'rolloverPrepaidRemainder' => $this->rolloverPrepaidRemainder,
                'expirationInterval' => $this->getExpirationInterval(),
                'expirationIntervalUnit' => $this->getExpirationIntervalUnit(),
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
            $json['tax_included']               = $this->taxIncluded;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']             = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->interval)) {
            $json['interval']                   = $this->interval;
        }
        if (!empty($this->intervalUnit)) {
            $json['interval_unit']              = IntervalUnit::checkValue($this->intervalUnit['value']);
        }
        $json['prices']                         = $this->prices;
        if (isset($this->renewPrepaidAllocation)) {
            $json['renew_prepaid_allocation']   = $this->renewPrepaidAllocation;
        }
        if (isset($this->rolloverPrepaidRemainder)) {
            $json['rollover_prepaid_remainder'] = $this->rolloverPrepaidRemainder;
        }
        if (!empty($this->expirationInterval)) {
            $json['expiration_interval']        = $this->expirationInterval['value'];
        }
        if (!empty($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']   =
                ExpirationIntervalUnit::checkValue(
                    $this->expirationIntervalUnit['value']
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
