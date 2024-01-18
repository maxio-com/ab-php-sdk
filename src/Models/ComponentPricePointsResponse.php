<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ComponentPricePointsResponse implements \JsonSerializable
{
    /**
     * @var ComponentPricePoint[]|null
     */
    private $pricePoints;

    /**
     * @var ListPublicKeysMeta|null
     */
    private $meta;

    /**
     * Returns Price Points.
     *
     * @return ComponentPricePoint[]|null
     */
    public function getPricePoints(): ?array
    {
        return $this->pricePoints;
    }

    /**
     * Sets Price Points.
     *
     * @maps price_points
     *
     * @param ComponentPricePoint[]|null $pricePoints
     */
    public function setPricePoints(?array $pricePoints): void
    {
        $this->pricePoints = $pricePoints;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ?ListPublicKeysMeta
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?ListPublicKeysMeta $meta): void
    {
        $this->meta = $meta;
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
        if (isset($this->pricePoints)) {
            $json['price_points'] = $this->pricePoints;
        }
        if (isset($this->meta)) {
            $json['meta']         = $this->meta;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
