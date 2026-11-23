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

class AggregatedEntitlementPeriodicity implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $unit;

    /**
     * Returns Interval.
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Unit.
     * The recurring window over which a `usage_limit` feature's allowance resets.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Sets Unit.
     * The recurring window over which a `usage_limit` feature's allowance resets.
     *
     * @maps unit
     * @factory \AdvancedBillingLib\Models\EntitlementPeriodicityUnit::checkValue
     */
    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * Converts the AggregatedEntitlementPeriodicity object to a human-readable string representation.
     *
     * @return string The string representation of the AggregatedEntitlementPeriodicity object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AggregatedEntitlementPeriodicity',
            [
                'interval' => $this->interval,
                'unit' => $this->unit,
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
        if (isset($this->interval)) {
            $json['interval'] = $this->interval;
        }
        if (isset($this->unit)) {
            $json['unit']     = EntitlementPeriodicityUnit::checkValue($this->unit);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
