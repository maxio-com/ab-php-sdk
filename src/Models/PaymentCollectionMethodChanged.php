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

class PaymentCollectionMethodChanged implements \JsonSerializable
{
    /**
     * @var string
     */
    private $previousValue;

    /**
     * @var string
     */
    private $currentValue;

    /**
     * @param string $previousValue
     * @param string $currentValue
     */
    public function __construct(string $previousValue, string $currentValue)
    {
        $this->previousValue = $previousValue;
        $this->currentValue = $currentValue;
    }

    /**
     * Returns Previous Value.
     */
    public function getPreviousValue(): string
    {
        return $this->previousValue;
    }

    /**
     * Sets Previous Value.
     *
     * @required
     * @maps previous_value
     */
    public function setPreviousValue(string $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * Returns Current Value.
     */
    public function getCurrentValue(): string
    {
        return $this->currentValue;
    }

    /**
     * Sets Current Value.
     *
     * @required
     * @maps current_value
     */
    public function setCurrentValue(string $currentValue): void
    {
        $this->currentValue = $currentValue;
    }

    /**
     * Converts the PaymentCollectionMethodChanged object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentCollectionMethodChanged object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentCollectionMethodChanged',
            [
                'previousValue' => $this->previousValue,
                'currentValue' => $this->currentValue,
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
        $json['previous_value'] = $this->previousValue;
        $json['current_value']  = $this->currentValue;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
