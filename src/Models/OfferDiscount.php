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
     * Converts the OfferDiscount object to a human-readable string representation.
     *
     * @return string The string representation of the OfferDiscount object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OfferDiscount',
            [
                'couponCode' => $this->couponCode,
                'couponId' => $this->couponId,
                'couponName' => $this->couponName,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        if (isset($this->couponCode)) {
            $json['coupon_code'] = $this->couponCode;
        }
        if (isset($this->couponId)) {
            $json['coupon_id']   = $this->couponId;
        }
        if (isset($this->couponName)) {
            $json['coupon_name'] = $this->couponName;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
