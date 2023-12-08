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

class CreateOrUpdateCoupon implements \JsonSerializable
{
    /**
     * @var CreateOrUpdatePercentageCoupon|CreateOrUpdateFlatAmountCoupon|null
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
     *
     * @return CreateOrUpdatePercentageCoupon|CreateOrUpdateFlatAmountCoupon|null
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Sets Coupon.
     *
     * @maps coupon
     * @mapsBy anyOf(oneOf(CreateOrUpdatePercentageCoupon,CreateOrUpdateFlatAmountCoupon),null)
     *
     * @param CreateOrUpdatePercentageCoupon|CreateOrUpdateFlatAmountCoupon|null $coupon
     */
    public function setCoupon($coupon): void
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
            $json['coupon']                =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->coupon,
                    'anyOf(oneOf(CreateOrUpdatePercentageCoupon,CreateOrUpdateFlatAmountCoupon),null)'
                );
        }
        if (isset($this->restrictedProducts)) {
            $json['restricted_products']   = $this->restrictedProducts;
        }
        if (isset($this->restrictedComponents)) {
            $json['restricted_components'] = $this->restrictedComponents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
