<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
