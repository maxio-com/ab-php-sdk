<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class OfferDiscount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $couponCode;

    /**
     * @var int|null
     */
    private $couponId;

    /**
     * @var string|null
     */
    private $couponName;

    /**
     * Returns Coupon Code.
     */
    public function getCouponCode(): ?string
    {
        return $this->couponCode;
    }

    /**
     * Sets Coupon Code.
     *
     * @maps coupon_code
     */
    public function setCouponCode(?string $couponCode): void
    {
        $this->couponCode = $couponCode;
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
     * Returns Coupon Name.
     */
    public function getCouponName(): ?string
    {
        return $this->couponName;
    }

    /**
     * Sets Coupon Name.
     *
     * @maps coupon_name
     */
    public function setCouponName(?string $couponName): void
    {
        $this->couponName = $couponName;
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
        if (isset($this->couponCode)) {
            $json['coupon_code'] = $this->couponCode;
        }
        if (isset($this->couponId)) {
            $json['coupon_id']   = $this->couponId;
        }
        if (isset($this->couponName)) {
            $json['coupon_name'] = $this->couponName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
