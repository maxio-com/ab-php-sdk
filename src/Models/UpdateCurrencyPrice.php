<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateCurrencyPrice implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $price;

    /**
     * @param int $id
     * @param int $price
     */
    public function __construct(int $id, int $price)
    {
        $this->id = $id;
        $this->price = $price;
    }

    /**
     * Returns Id.
     * ID of the currency price record being updated
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * ID of the currency price record being updated
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Price.
     * New price for the given currency
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Sets Price.
     * New price for the given currency
     *
     * @required
     * @maps price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
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
        $json['id']    = $this->id;
        $json['price'] = $this->price;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
