<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Errors implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $perPage;

    /**
     * @var string[]|null
     */
    private $pricePoint;

    /**
     * Returns Per Page.
     *
     * @return string[]|null
     */
    public function getPerPage(): ?array
    {
        return $this->perPage;
    }

    /**
     * Sets Per Page.
     *
     * @maps per_page
     *
     * @param string[]|null $perPage
     */
    public function setPerPage(?array $perPage): void
    {
        $this->perPage = $perPage;
    }

    /**
     * Returns Price Point.
     *
     * @return string[]|null
     */
    public function getPricePoint(): ?array
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @maps price_point
     *
     * @param string[]|null $pricePoint
     */
    public function setPricePoint(?array $pricePoint): void
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
        if (isset($this->perPage)) {
            $json['per_page']    = $this->perPage;
        }
        if (isset($this->pricePoint)) {
            $json['price_point'] = $this->pricePoint;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
