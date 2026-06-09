<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Billing schedule settings for component allocations or usages on multi-frequency subscriptions. Use
 * this to start a component's billing period on a custom date instead of aligning with the product
 * charge schedule.
 */
class BillingSchedule implements \JsonSerializable
{
    /**
     * @var array
     */
    private $initialBillingAt = [];

    /**
     * Returns Initial Billing At.
     * Custom start date (ISO 8601 date, YYYY-MM-DD) for the component's first billing period. If omitted
     * or null, billing aligns with the product schedule. If provided, date must be on or after the minimum
     * allowed date for the subscription or component.
     */
    public function getInitialBillingAt(): ?\DateTime
    {
        if (count($this->initialBillingAt) == 0) {
            return null;
        }
        return $this->initialBillingAt['value'];
    }

    /**
     * Sets Initial Billing At.
     * Custom start date (ISO 8601 date, YYYY-MM-DD) for the component's first billing period. If omitted
     * or null, billing aligns with the product schedule. If provided, date must be on or after the minimum
     * allowed date for the subscription or component.
     *
     * @maps initial_billing_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setInitialBillingAt(?\DateTime $initialBillingAt): void
    {
        $this->initialBillingAt['value'] = $initialBillingAt;
    }

    /**
     * Unsets Initial Billing At.
     * Custom start date (ISO 8601 date, YYYY-MM-DD) for the component's first billing period. If omitted
     * or null, billing aligns with the product schedule. If provided, date must be on or after the minimum
     * allowed date for the subscription or component.
     */
    public function unsetInitialBillingAt(): void
    {
        $this->initialBillingAt = [];
    }

    /**
     * Converts the BillingSchedule object to a human-readable string representation.
     *
     * @return string The string representation of the BillingSchedule object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BillingSchedule',
            [
                'initialBillingAt' => $this->getInitialBillingAt(),
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
        if (!empty($this->initialBillingAt)) {
            $json['initial_billing_at'] = DateTimeHelper::toSimpleDate($this->initialBillingAt['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
