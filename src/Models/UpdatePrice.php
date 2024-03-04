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

class UpdatePrice implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|string|null
     */
    private $endingQuantity;

    /**
     * @var float|string|null
     */
    private $unitPrice;

    /**
     * @var bool|null
     */
    private $destroy;

    /**
     * @var int|string|null
     */
    private $startingQuantity;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Ending Quantity.
     *
     * @return int|string|null
     */
    public function getEndingQuantity()
    {
        return $this->endingQuantity;
    }

    /**
     * Sets Ending Quantity.
     *
     * @maps ending_quantity
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $endingQuantity
     */
    public function setEndingQuantity($endingQuantity): void
    {
        $this->endingQuantity = $endingQuantity;
    }

    /**
     * Returns Unit Price.
     * The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @return float|string|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * The price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065
     *
     * @maps unit_price
     * @mapsBy anyOf(oneOf(float,string),null)
     *
     * @param float|string|null $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Destroy.
     */
    public function getDestroy(): ?bool
    {
        return $this->destroy;
    }

    /**
     * Sets Destroy.
     *
     * @maps _destroy
     */
    public function setDestroy(?bool $destroy): void
    {
        $this->destroy = $destroy;
    }

    /**
     * Returns Starting Quantity.
     *
     * @return int|string|null
     */
    public function getStartingQuantity()
    {
        return $this->startingQuantity;
    }

    /**
     * Sets Starting Quantity.
     *
     * @maps starting_quantity
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $startingQuantity
     */
    public function setStartingQuantity($startingQuantity): void
    {
        $this->startingQuantity = $startingQuantity;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->id)) {
            $json['id']                = $this->id;
        }
        if (isset($this->endingQuantity)) {
            $json['ending_quantity']   =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->endingQuantity,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']        =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->unitPrice,
                    'anyOf(oneOf(float,string),null)'
                );
        }
        if (isset($this->destroy)) {
            $json['_destroy']          = $this->destroy;
        }
        if (isset($this->startingQuantity)) {
            $json['starting_quantity'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->startingQuantity,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
