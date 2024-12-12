<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SaleRepItemMrr implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $mrr;

    /**
     * @var string|null
     */
    private $usage;

    /**
     * @var string|null
     */
    private $recurring;

    /**
     * Returns Mrr.
     */
    public function getMrr(): ?string
    {
        return $this->mrr;
    }

    /**
     * Sets Mrr.
     *
     * @maps mrr
     */
    public function setMrr(?string $mrr): void
    {
        $this->mrr = $mrr;
    }

    /**
     * Returns Usage.
     */
    public function getUsage(): ?string
    {
        return $this->usage;
    }

    /**
     * Sets Usage.
     *
     * @maps usage
     */
    public function setUsage(?string $usage): void
    {
        $this->usage = $usage;
    }

    /**
     * Returns Recurring.
     */
    public function getRecurring(): ?string
    {
        return $this->recurring;
    }

    /**
     * Sets Recurring.
     *
     * @maps recurring
     */
    public function setRecurring(?string $recurring): void
    {
        $this->recurring = $recurring;
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
        if (isset($this->mrr)) {
            $json['mrr']       = $this->mrr;
        }
        if (isset($this->usage)) {
            $json['usage']     = $this->usage;
        }
        if (isset($this->recurring)) {
            $json['recurring'] = $this->recurring;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
