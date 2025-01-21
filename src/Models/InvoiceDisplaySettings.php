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

class InvoiceDisplaySettings implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $hideZeroSubtotalLines;

    /**
     * @var bool|null
     */
    private $includeDiscountsOnLines;

    /**
     * Returns Hide Zero Subtotal Lines.
     */
    public function getHideZeroSubtotalLines(): ?bool
    {
        return $this->hideZeroSubtotalLines;
    }

    /**
     * Sets Hide Zero Subtotal Lines.
     *
     * @maps hide_zero_subtotal_lines
     */
    public function setHideZeroSubtotalLines(?bool $hideZeroSubtotalLines): void
    {
        $this->hideZeroSubtotalLines = $hideZeroSubtotalLines;
    }

    /**
     * Returns Include Discounts on Lines.
     */
    public function getIncludeDiscountsOnLines(): ?bool
    {
        return $this->includeDiscountsOnLines;
    }

    /**
     * Sets Include Discounts on Lines.
     *
     * @maps include_discounts_on_lines
     */
    public function setIncludeDiscountsOnLines(?bool $includeDiscountsOnLines): void
    {
        $this->includeDiscountsOnLines = $includeDiscountsOnLines;
    }

    /**
     * Converts the InvoiceDisplaySettings object to a human-readable string representation.
     *
     * @return string The string representation of the InvoiceDisplaySettings object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InvoiceDisplaySettings',
            [
                'hideZeroSubtotalLines' => $this->hideZeroSubtotalLines,
                'includeDiscountsOnLines' => $this->includeDiscountsOnLines,
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
        if (isset($this->hideZeroSubtotalLines)) {
            $json['hide_zero_subtotal_lines']   = $this->hideZeroSubtotalLines;
        }
        if (isset($this->includeDiscountsOnLines)) {
            $json['include_discounts_on_lines'] = $this->includeDiscountsOnLines;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
