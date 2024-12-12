<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CouponCurrency implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var array
     */
    private $price = [];

    /**
     * @var int|null
     */
    private $couponId;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Price.
     */
    public function getPrice(): ?float
    {
        if (count($this->price) == 0) {
            return null;
        }
        return $this->price['value'];
    }

    /**
     * Sets Price.
     *
     * @maps price
     */
    public function setPrice(?float $price): void
    {
        $this->price['value'] = $price;
    }

    /**
     * Unsets Price.
     */
    public function unsetPrice(): void
    {
        $this->price = [];
    }

    /**
     * Returns Coupon Id.
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    /**
     * Sets Coupon Id.
     *
     * @maps coupon_id
     */
    public function setCouponId(?int $couponId): void
    {
        $this->couponId = $couponId;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        if (!empty($this->id)) {
            $json['id']        = $this->id['value'];
        }
        if (isset($this->currency)) {
            $json['currency']  = $this->currency;
        }
        if (!empty($this->price)) {
            $json['price']     = $this->price['value'];
        }
        if (isset($this->couponId)) {
            $json['coupon_id'] = $this->couponId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
