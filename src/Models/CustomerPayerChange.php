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

class CustomerPayerChange implements \JsonSerializable
{
    /**
     * @var InvoicePayerChange
     */
    private $before;

    /**
     * @var InvoicePayerChange
     */
    private $after;

    /**
     * @param InvoicePayerChange $before
     * @param InvoicePayerChange $after
     */
    public function __construct(InvoicePayerChange $before, InvoicePayerChange $after)
    {
        $this->before = $before;
        $this->after = $after;
    }

    /**
     * Returns Before.
     */
    public function getBefore(): InvoicePayerChange
    {
        return $this->before;
    }

    /**
     * Sets Before.
     *
     * @required
     * @maps before
     */
    public function setBefore(InvoicePayerChange $before): void
    {
        $this->before = $before;
    }

    /**
     * Returns After.
     */
    public function getAfter(): InvoicePayerChange
    {
        return $this->after;
    }

    /**
     * Sets After.
     *
     * @required
     * @maps after
     */
    public function setAfter(InvoicePayerChange $after): void
    {
        $this->after = $after;
    }

    /**
     * Converts the CustomerPayerChange object to a human-readable string representation.
     *
     * @return string The string representation of the CustomerPayerChange object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CustomerPayerChange',
            [
                'before' => $this->before,
                'after' => $this->after,
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
        $json['before'] = $this->before;
        $json['after']  = $this->after;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
