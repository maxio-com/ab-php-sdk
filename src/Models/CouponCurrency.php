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
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var int|null
     */
    private $price;

    /**
     * @var int|null
     */
    private $couponId;

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
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * Sets Price.
     *
     * @maps price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
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
            $json['id']        = $this->id;
        }
        if (isset($this->currency)) {
            $json['currency']  = $this->currency;
        }
        if (isset($this->price)) {
            $json['price']     = $this->price;
        }
        if (isset($this->couponId)) {
            $json['coupon_id'] = $this->couponId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
