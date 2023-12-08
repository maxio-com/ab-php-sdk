<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Object which contains subscription errors.
 */
class SubscriptionGroupSubscriptionError implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $product;

    /**
     * @var string[]|null
     */
    private $productPricePointId;

    /**
     * @var string[]|null
     */
    private $paymentProfile;

    /**
     * @var string[]|null
     */
    private $paymentProfileChargifyToken;

    /**
     * Returns Product.
     *
     * @return string[]|null
     */
    public function getProduct(): ?array
    {
        return $this->product;
    }

    /**
     * Sets Product.
     *
     * @maps product
     *
     * @param string[]|null $product
     */
    public function setProduct(?array $product): void
    {
        $this->product = $product;
    }

    /**
     * Returns Product Price Point Id.
     *
     * @return string[]|null
     */
    public function getProductPricePointId(): ?array
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     *
     * @maps product_price_point_id
     *
     * @param string[]|null $productPricePointId
     */
    public function setProductPricePointId(?array $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Payment Profile.
     *
     * @return string[]|null
     */
    public function getPaymentProfile(): ?array
    {
        return $this->paymentProfile;
    }

    /**
     * Sets Payment Profile.
     *
     * @maps payment_profile
     *
     * @param string[]|null $paymentProfile
     */
    public function setPaymentProfile(?array $paymentProfile): void
    {
        $this->paymentProfile = $paymentProfile;
    }

    /**
     * Returns Payment Profile Chargify Token.
     *
     * @return string[]|null
     */
    public function getPaymentProfileChargifyToken(): ?array
    {
        return $this->paymentProfileChargifyToken;
    }

    /**
     * Sets Payment Profile Chargify Token.
     *
     * @maps payment_profile.chargify_token
     *
     * @param string[]|null $paymentProfileChargifyToken
     */
    public function setPaymentProfileChargifyToken(?array $paymentProfileChargifyToken): void
    {
        $this->paymentProfileChargifyToken = $paymentProfileChargifyToken;
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
        if (isset($this->product)) {
            $json['product']                        = $this->product;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']         = $this->productPricePointId;
        }
        if (isset($this->paymentProfile)) {
            $json['payment_profile']                = $this->paymentProfile;
        }
        if (isset($this->paymentProfileChargifyToken)) {
            $json['payment_profile.chargify_token'] = $this->paymentProfileChargifyToken;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
