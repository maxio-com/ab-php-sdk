<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ProductPricePointErrors implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $pricePoint;

    /**
     * @var string[]|null
     */
    private $interval;

    /**
     * @var string[]|null
     */
    private $intervalUnit;

    /**
     * @var string[]|null
     */
    private $name;

    /**
     * @var string[]|null
     */
    private $price;

    /**
     * @var string[]|null
     */
    private $priceInCents;

    /**
     * Returns Price Point.
     */
    public function getPricePoint(): ?string
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @maps price_point
     */
    public function setPricePoint(?string $pricePoint): void
    {
        $this->pricePoint = $pricePoint;
    }

    /**
     * Returns Interval.
     *
     * @return string[]|null
     */
    public function getInterval(): ?array
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     *
     * @maps interval
     *
     * @param string[]|null $interval
     */
    public function setInterval(?array $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     *
     * @return string[]|null
     */
    public function getIntervalUnit(): ?array
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     *
     * @maps interval_unit
     *
     * @param string[]|null $intervalUnit
     */
    public function setIntervalUnit(?array $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Name.
     *
     * @return string[]|null
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     *
     * @param string[]|null $name
     */
    public function setName(?array $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Price.
     *
     * @return string[]|null
     */
    public function getPrice(): ?array
    {
        return $this->price;
    }

    /**
     * Sets Price.
     *
     * @maps price
     *
     * @param string[]|null $price
     */
    public function setPrice(?array $price): void
    {
        $this->price = $price;
    }

    /**
     * Returns Price in Cents.
     *
     * @return string[]|null
     */
    public function getPriceInCents(): ?array
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     *
     * @maps price_in_cents
     *
     * @param string[]|null $priceInCents
     */
    public function setPriceInCents(?array $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
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
            $json['price_point']    = $this->pricePoint;
        }
        if (isset($this->interval)) {
            $json['interval']       = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']  = $this->intervalUnit;
        }
        if (isset($this->name)) {
            $json['name']           = $this->name;
        }
        if (isset($this->price)) {
            $json['price']          = $this->price;
        }
        if (isset($this->priceInCents)) {
            $json['price_in_cents'] = $this->priceInCents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
