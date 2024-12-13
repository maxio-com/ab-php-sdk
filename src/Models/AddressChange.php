<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AddressChange implements \JsonSerializable
{
    /**
     * @var InvoiceAddress
     */
    private $before;

    /**
     * @var InvoiceAddress
     */
    private $after;

    /**
     * @param InvoiceAddress $before
     * @param InvoiceAddress $after
     */
    public function __construct(InvoiceAddress $before, InvoiceAddress $after)
    {
        $this->before = $before;
        $this->after = $after;
    }

    /**
     * Returns Before.
     */
    public function getBefore(): InvoiceAddress
    {
        return $this->before;
    }

    /**
     * Sets Before.
     *
     * @required
     * @maps before
     */
    public function setBefore(InvoiceAddress $before): void
    {
        $this->before = $before;
    }

    /**
     * Returns After.
     */
    public function getAfter(): InvoiceAddress
    {
        return $this->after;
    }

    /**
     * Sets After.
     *
     * @required
     * @maps after
     */
    public function setAfter(InvoiceAddress $after): void
    {
        $this->after = $after;
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
