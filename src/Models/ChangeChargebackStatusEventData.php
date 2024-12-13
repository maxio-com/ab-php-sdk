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
 * Example schema for an `change_chargeback_status` event
 */
class ChangeChargebackStatusEventData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $chargebackStatus;

    /**
     * @param string $chargebackStatus
     */
    public function __construct(string $chargebackStatus)
    {
        $this->chargebackStatus = $chargebackStatus;
    }

    /**
     * Returns Chargeback Status.
     */
    public function getChargebackStatus(): string
    {
        return $this->chargebackStatus;
    }

    /**
     * Sets Chargeback Status.
     *
     * @required
     * @maps chargeback_status
     * @factory \AdvancedBillingLib\Models\ChargebackStatus::checkValue
     */
    public function setChargebackStatus(string $chargebackStatus): void
    {
        $this->chargebackStatus = $chargebackStatus;
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
        $json['chargeback_status'] = ChargebackStatus::checkValue($this->chargebackStatus);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
