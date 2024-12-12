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
 * This attribute is particularly useful when you need to align billing events for different components
 * on distinct schedules within a subscription. Please note this only works for site with
 * Multifrequency enabled
 */
class BillingSchedule implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $initialBillingAt;

    /**
     * Returns Initial Billing At.
     * The initial_billing_at attribute in Maxio allows you to specify a custom starting date for billing
     * cycles associated with components that have their own billing frequency set. Only ISO8601 format is
     * supported.
     */
    public function getInitialBillingAt(): ?\DateTime
    {
        return $this->initialBillingAt;
    }

    /**
     * Sets Initial Billing At.
     * The initial_billing_at attribute in Maxio allows you to specify a custom starting date for billing
     * cycles associated with components that have their own billing frequency set. Only ISO8601 format is
     * supported.
     *
     * @maps initial_billing_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setInitialBillingAt(?\DateTime $initialBillingAt): void
    {
        $this->initialBillingAt = $initialBillingAt;
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
        if (isset($this->initialBillingAt)) {
            $json['initial_billing_at'] = DateTimeHelper::toSimpleDate($this->initialBillingAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
