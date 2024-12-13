<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CouponRequest implements \JsonSerializable
{
    /**
     * @var CouponPayload|null
     */
    private $coupon;

    /**
     * @var array<string,bool>|null
     */
    private $restrictedProducts;

    /**
     * @var array<string,bool>|null
     */
    private $restrictedComponents;

    /**
     * Returns Coupon.
     */
    public function getCoupon(): ?CouponPayload
    {
        return $this->coupon;
    }

    /**
     * Sets Coupon.
     *
     * @maps coupon
     */
    public function setCoupon(?CouponPayload $coupon): void
    {
        $this->coupon = $coupon;
    }

    /**
     * Returns Restricted Products.
     * An object where the keys are product_ids and the values are booleans indicating if the coupon should
     * be applicable to the product
     *
     * @return array<string,bool>|null
     */
    public function getRestrictedProducts(): ?array
    {
        return $this->restrictedProducts;
    }

    /**
     * Sets Restricted Products.
     * An object where the keys are product_ids and the values are booleans indicating if the coupon should
     * be applicable to the product
     *
     * @maps restricted_products
     *
     * @param array<string,bool>|null $restrictedProducts
     */
    public function setRestrictedProducts(?array $restrictedProducts): void
    {
        $this->restrictedProducts = $restrictedProducts;
    }

    /**
     * Returns Restricted Components.
     * An object where the keys are component_ids and the values are booleans indicating if the coupon
     * should be applicable to the component
     *
     * @return array<string,bool>|null
     */
    public function getRestrictedComponents(): ?array
    {
        return $this->restrictedComponents;
    }

    /**
     * Sets Restricted Components.
     * An object where the keys are component_ids and the values are booleans indicating if the coupon
     * should be applicable to the component
     *
     * @maps restricted_components
     *
     * @param array<string,bool>|null $restrictedComponents
     */
    public function setRestrictedComponents(?array $restrictedComponents): void
    {
        $this->restrictedComponents = $restrictedComponents;
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
        if (isset($this->coupon)) {
            $json['coupon']                = $this->coupon;
        }
        if (isset($this->restrictedProducts)) {
            $json['restricted_products']   = $this->restrictedProducts;
        }
        if (isset($this->restrictedComponents)) {
            $json['restricted_components'] = $this->restrictedComponents;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
