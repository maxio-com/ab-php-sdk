<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListComponentsPricePointsResponse implements \JsonSerializable
{
    /**
     * @var ComponentPricePoint[]
     */
    private $pricePoints;

    /**
     * @param ComponentPricePoint[] $pricePoints
     */
    public function __construct(array $pricePoints)
    {
        $this->pricePoints = $pricePoints;
    }

    /**
     * Returns Price Points.
     *
     * @return ComponentPricePoint[]
     */
    public function getPricePoints(): array
    {
        return $this->pricePoints;
    }

    /**
     * Sets Price Points.
     *
     * @required
     * @maps price_points
     *
     * @param ComponentPricePoint[] $pricePoints
     */
    public function setPricePoints(array $pricePoints): void
    {
        $this->pricePoints = $pricePoints;
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
        $json['price_points'] = $this->pricePoints;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
