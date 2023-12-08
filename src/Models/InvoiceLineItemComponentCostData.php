<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceLineItemComponentCostData implements \JsonSerializable
{
    /**
     * @var ComponentCostData[]|null
     */
    private $rates;

    /**
     * Returns Rates.
     *
     * @return ComponentCostData[]|null
     */
    public function getRates(): ?array
    {
        return $this->rates;
    }

    /**
     * Sets Rates.
     *
     * @maps rates
     *
     * @param ComponentCostData[]|null $rates
     */
    public function setRates(?array $rates): void
    {
        $this->rates = $rates;
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
        if (isset($this->rates)) {
            $json['rates'] = $this->rates;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
