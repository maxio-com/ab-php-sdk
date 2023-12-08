<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CouponResponse implements \JsonSerializable
{
    /**
     * @var Coupon|null
     */
    private $coupon;

    /**
     * Returns Coupon.
     */
    public function getCoupon(): ?Coupon
    {
        return $this->coupon;
    }

    /**
     * Sets Coupon.
     *
     * @maps coupon
     */
    public function setCoupon(?Coupon $coupon): void
    {
        $this->coupon = $coupon;
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
        if (isset($this->coupon)) {
            $json['coupon'] = $this->coupon;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
