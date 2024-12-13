<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Optional for Event Based Components. If the `include=historic_usages` query param is provided, the
 * last ten billing periods will be returned.
 */
class HistoricUsage implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $totalUsageQuantity;

    /**
     * @var \DateTime|null
     */
    private $billingPeriodStartsAt;

    /**
     * @var \DateTime|null
     */
    private $billingPeriodEndsAt;

    /**
     * Returns Total Usage Quantity.
     * Total usage of a component for billing period
     */
    public function getTotalUsageQuantity(): ?float
    {
        return $this->totalUsageQuantity;
    }

    /**
     * Sets Total Usage Quantity.
     * Total usage of a component for billing period
     *
     * @maps total_usage_quantity
     */
    public function setTotalUsageQuantity(?float $totalUsageQuantity): void
    {
        $this->totalUsageQuantity = $totalUsageQuantity;
    }

    /**
     * Returns Billing Period Starts At.
     * Start date of billing period
     */
    public function getBillingPeriodStartsAt(): ?\DateTime
    {
        return $this->billingPeriodStartsAt;
    }

    /**
     * Sets Billing Period Starts At.
     * Start date of billing period
     *
     * @maps billing_period_starts_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setBillingPeriodStartsAt(?\DateTime $billingPeriodStartsAt): void
    {
        $this->billingPeriodStartsAt = $billingPeriodStartsAt;
    }

    /**
     * Returns Billing Period Ends At.
     * End date of billing period
     */
    public function getBillingPeriodEndsAt(): ?\DateTime
    {
        return $this->billingPeriodEndsAt;
    }

    /**
     * Sets Billing Period Ends At.
     * End date of billing period
     *
     * @maps billing_period_ends_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setBillingPeriodEndsAt(?\DateTime $billingPeriodEndsAt): void
    {
        $this->billingPeriodEndsAt = $billingPeriodEndsAt;
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
        if (isset($this->totalUsageQuantity)) {
            $json['total_usage_quantity']     = $this->totalUsageQuantity;
        }
        if (isset($this->billingPeriodStartsAt)) {
            $json['billing_period_starts_at'] = DateTimeHelper::toRfc3339DateTime($this->billingPeriodStartsAt);
        }
        if (isset($this->billingPeriodEndsAt)) {
            $json['billing_period_ends_at']   = DateTimeHelper::toRfc3339DateTime($this->billingPeriodEndsAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
