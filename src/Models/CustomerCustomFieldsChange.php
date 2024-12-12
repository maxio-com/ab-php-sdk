<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CustomerCustomFieldsChange implements \JsonSerializable
{
    /**
     * @var InvoiceCustomField[]
     */
    private $before;

    /**
     * @var InvoiceCustomField[]
     */
    private $after;

    /**
     * @param InvoiceCustomField[] $before
     * @param InvoiceCustomField[] $after
     */
    public function __construct(array $before, array $after)
    {
        $this->before = $before;
        $this->after = $after;
    }

    /**
     * Returns Before.
     *
     * @return InvoiceCustomField[]
     */
    public function getBefore(): array
    {
        return $this->before;
    }

    /**
     * Sets Before.
     *
     * @required
     * @maps before
     *
     * @param InvoiceCustomField[] $before
     */
    public function setBefore(array $before): void
    {
        $this->before = $before;
    }

    /**
     * Returns After.
     *
     * @return InvoiceCustomField[]
     */
    public function getAfter(): array
    {
        return $this->after;
    }

    /**
     * Sets After.
     *
     * @required
     * @maps after
     *
     * @param InvoiceCustomField[] $after
     */
    public function setAfter(array $after): void
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
