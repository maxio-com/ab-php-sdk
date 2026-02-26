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

class ScheduledRenewalConfigurationItemResponse implements \JsonSerializable
{
    /**
     * @var ScheduledRenewalConfigurationItem|null
     */
    private $scheduledRenewalConfigurationItem;

    /**
     * Returns Scheduled Renewal Configuration Item.
     */
    public function getScheduledRenewalConfigurationItem(): ?ScheduledRenewalConfigurationItem
    {
        return $this->scheduledRenewalConfigurationItem;
    }

    /**
     * Sets Scheduled Renewal Configuration Item.
     *
     * @maps scheduled_renewal_configuration_item
     */
    public function setScheduledRenewalConfigurationItem(
        ?ScheduledRenewalConfigurationItem $scheduledRenewalConfigurationItem
    ): void {
        $this->scheduledRenewalConfigurationItem = $scheduledRenewalConfigurationItem;
    }

    /**
     * Converts the ScheduledRenewalConfigurationItemResponse object to a human-readable string
     * representation.
     *
     * @return string The string representation of the ScheduledRenewalConfigurationItemResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ScheduledRenewalConfigurationItemResponse',
            [
                'scheduledRenewalConfigurationItem' => $this->scheduledRenewalConfigurationItem,
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
        if (isset($this->scheduledRenewalConfigurationItem)) {
            $json['scheduled_renewal_configuration_item'] = $this->scheduledRenewalConfigurationItem;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
