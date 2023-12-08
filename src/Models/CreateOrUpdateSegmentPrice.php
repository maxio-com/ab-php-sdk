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

class CreateOrUpdateSegmentPrice implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $startingQuantity;

    /**
     * @var int|null
     */
    private $endingQuantity;

    /**
     * @var string|float
     */
    private $unitPrice;

    /**
     * @param string|float $unitPrice
     */
    public function __construct($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Starting Quantity.
     */
    public function getStartingQuantity(): ?int
    {
        return $this->startingQuantity;
    }

    /**
     * Sets Starting Quantity.
     *
     * @maps starting_quantity
     */
    public function setStartingQuantity(?int $startingQuantity): void
    {
        $this->startingQuantity = $startingQuantity;
    }

    /**
     * Returns Ending Quantity.
     */
    public function getEndingQuantity(): ?int
    {
        return $this->endingQuantity;
    }

    /**
     * Sets Ending Quantity.
     *
     * @maps ending_quantity
     */
    public function setEndingQuantity(?int $endingQuantity): void
    {
        $this->endingQuantity = $endingQuantity;
    }

    /**
     * Returns Unit Price.
     * The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @return string|float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @required
     * @maps unit_price
     * @mapsBy oneOf(string,float)
     *
     * @param string|float $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
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
        if (isset($this->startingQuantity)) {
            $json['starting_quantity'] = $this->startingQuantity;
        }
        if (isset($this->endingQuantity)) {
            $json['ending_quantity']   = $this->endingQuantity;
        }
        $json['unit_price']            =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->unitPrice,
                'oneOf(string,float)'
            );

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
