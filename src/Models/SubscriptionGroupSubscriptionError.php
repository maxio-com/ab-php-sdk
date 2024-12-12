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
     * @var string[]|null
     */
    private $base;

    /**
     * @var string[]|null
     */
    private $paymentProfileExpirationMonth;

    /**
     * @var string[]|null
     */
    private $paymentProfileExpirationYear;

    /**
     * @var string[]|null
     */
    private $paymentProfileFullNumber;

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
     * Returns Base.
     *
     * @return string[]|null
     */
    public function getBase(): ?array
    {
        return $this->base;
    }

    /**
     * Sets Base.
     *
     * @maps base
     *
     * @param string[]|null $base
     */
    public function setBase(?array $base): void
    {
        $this->base = $base;
    }

    /**
     * Returns Payment Profile Expiration Month.
     *
     * @return string[]|null
     */
    public function getPaymentProfileExpirationMonth(): ?array
    {
        return $this->paymentProfileExpirationMonth;
    }

    /**
     * Sets Payment Profile Expiration Month.
     *
     * @maps payment_profile.expiration_month
     *
     * @param string[]|null $paymentProfileExpirationMonth
     */
    public function setPaymentProfileExpirationMonth(?array $paymentProfileExpirationMonth): void
    {
        $this->paymentProfileExpirationMonth = $paymentProfileExpirationMonth;
    }

    /**
     * Returns Payment Profile Expiration Year.
     *
     * @return string[]|null
     */
    public function getPaymentProfileExpirationYear(): ?array
    {
        return $this->paymentProfileExpirationYear;
    }

    /**
     * Sets Payment Profile Expiration Year.
     *
     * @maps payment_profile.expiration_year
     *
     * @param string[]|null $paymentProfileExpirationYear
     */
    public function setPaymentProfileExpirationYear(?array $paymentProfileExpirationYear): void
    {
        $this->paymentProfileExpirationYear = $paymentProfileExpirationYear;
    }

    /**
     * Returns Payment Profile Full Number.
     *
     * @return string[]|null
     */
    public function getPaymentProfileFullNumber(): ?array
    {
        return $this->paymentProfileFullNumber;
    }

    /**
     * Sets Payment Profile Full Number.
     *
     * @maps payment_profile.full_number
     *
     * @param string[]|null $paymentProfileFullNumber
     */
    public function setPaymentProfileFullNumber(?array $paymentProfileFullNumber): void
    {
        $this->paymentProfileFullNumber = $paymentProfileFullNumber;
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
        if (isset($this->product)) {
            $json['product']                          = $this->product;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']           = $this->productPricePointId;
        }
        if (isset($this->paymentProfile)) {
            $json['payment_profile']                  = $this->paymentProfile;
        }
        if (isset($this->paymentProfileChargifyToken)) {
            $json['payment_profile.chargify_token']   = $this->paymentProfileChargifyToken;
        }
        if (isset($this->base)) {
            $json['base']                             = $this->base;
        }
        if (isset($this->paymentProfileExpirationMonth)) {
            $json['payment_profile.expiration_month'] = $this->paymentProfileExpirationMonth;
        }
        if (isset($this->paymentProfileExpirationYear)) {
            $json['payment_profile.expiration_year']  = $this->paymentProfileExpirationYear;
        }
        if (isset($this->paymentProfileFullNumber)) {
            $json['payment_profile.full_number']      = $this->paymentProfileFullNumber;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
