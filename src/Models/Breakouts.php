<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Breakouts implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $planAmountInCents;

    /**
     * @var string|null
     */
    private $planAmountFormatted;

    /**
     * @var int|null
     */
    private $usageAmountInCents;

    /**
     * @var string|null
     */
    private $usageAmountFormatted;

    /**
     * Returns Plan Amount in Cents.
     */
    public function getPlanAmountInCents(): ?int
    {
        return $this->planAmountInCents;
    }

    /**
     * Sets Plan Amount in Cents.
     *
     * @maps plan_amount_in_cents
     */
    public function setPlanAmountInCents(?int $planAmountInCents): void
    {
        $this->planAmountInCents = $planAmountInCents;
    }

    /**
     * Returns Plan Amount Formatted.
     */
    public function getPlanAmountFormatted(): ?string
    {
        return $this->planAmountFormatted;
    }

    /**
     * Sets Plan Amount Formatted.
     *
     * @maps plan_amount_formatted
     */
    public function setPlanAmountFormatted(?string $planAmountFormatted): void
    {
        $this->planAmountFormatted = $planAmountFormatted;
    }

    /**
     * Returns Usage Amount in Cents.
     */
    public function getUsageAmountInCents(): ?int
    {
        return $this->usageAmountInCents;
    }

    /**
     * Sets Usage Amount in Cents.
     *
     * @maps usage_amount_in_cents
     */
    public function setUsageAmountInCents(?int $usageAmountInCents): void
    {
        $this->usageAmountInCents = $usageAmountInCents;
    }

    /**
     * Returns Usage Amount Formatted.
     */
    public function getUsageAmountFormatted(): ?string
    {
        return $this->usageAmountFormatted;
    }

    /**
     * Sets Usage Amount Formatted.
     *
     * @maps usage_amount_formatted
     */
    public function setUsageAmountFormatted(?string $usageAmountFormatted): void
    {
        $this->usageAmountFormatted = $usageAmountFormatted;
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
        if (isset($this->planAmountInCents)) {
            $json['plan_amount_in_cents']   = $this->planAmountInCents;
        }
        if (isset($this->planAmountFormatted)) {
            $json['plan_amount_formatted']  = $this->planAmountFormatted;
        }
        if (isset($this->usageAmountInCents)) {
            $json['usage_amount_in_cents']  = $this->usageAmountInCents;
        }
        if (isset($this->usageAmountFormatted)) {
            $json['usage_amount_formatted'] = $this->usageAmountFormatted;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
