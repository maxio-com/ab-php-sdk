<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateComponentPricePointRequest implements \JsonSerializable
{
    /**
     * @var UpdateComponentPricePoint|null
     */
    private $pricePoint;

    /**
     * Returns Price Point.
     */
    public function getPricePoint(): ?UpdateComponentPricePoint
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @maps price_point
     */
    public function setPricePoint(?UpdateComponentPricePoint $pricePoint): void
    {
        $this->pricePoint = $pricePoint;
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
        if (isset($this->pricePoint)) {
            $json['price_point'] = $this->pricePoint;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
