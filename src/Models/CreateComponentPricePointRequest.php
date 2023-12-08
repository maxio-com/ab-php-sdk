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

class CreateComponentPricePointRequest implements \JsonSerializable
{
    /**
     * @var CreateComponentPricePoint|CreatePrepaidUsageComponentPricePoint
     */
    private $pricePoint;

    /**
     * @param CreateComponentPricePoint|CreatePrepaidUsageComponentPricePoint $pricePoint
     */
    public function __construct($pricePoint)
    {
        $this->pricePoint = $pricePoint;
    }

    /**
     * Returns Price Point.
     *
     * @return CreateComponentPricePoint|CreatePrepaidUsageComponentPricePoint
     */
    public function getPricePoint()
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @required
     * @maps price_point
     * @mapsBy anyOf(CreateComponentPricePoint,CreatePrepaidUsageComponentPricePoint)
     *
     * @param CreateComponentPricePoint|CreatePrepaidUsageComponentPricePoint $pricePoint
     */
    public function setPricePoint($pricePoint): void
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
        $json['price_point'] =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->pricePoint,
                'anyOf(CreateComponentPricePoint,CreatePrepaidUsageComponentPricePoint)'
            );

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
