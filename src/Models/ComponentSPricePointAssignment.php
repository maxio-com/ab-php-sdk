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

class ComponentSPricePointAssignment implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var string|int|null
     */
    private $pricePoint;

    /**
     * Returns Component Id.
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Price Point.
     *
     * @return string|int|null
     */
    public function getPricePoint()
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @maps price_point
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $pricePoint
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
        if (isset($this->componentId)) {
            $json['component_id'] = $this->componentId;
        }
        if (isset($this->pricePoint)) {
            $json['price_point']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePoint,
                    'anyOf(oneOf(string,int),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
