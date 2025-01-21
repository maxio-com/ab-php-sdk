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

class SubscriptionGroupItem implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var array
     */
    private $reference = [];

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var array
     */
    private $productHandle = [];

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var string|null
     */
    private $productPricePointHandle;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var array
     */
    private $couponCode = [];

    /**
     * @var int|null
     */
    private $totalRevenueInCents;

    /**
     * @var int|null
     */
    private $balanceInCents;

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
     * Returns Reference.
     */
    public function getReference(): ?string
    {
        if (count($this->reference) == 0) {
            return null;
        }
        return $this->reference['value'];
    }

    /**
     * Sets Reference.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference['value'] = $reference;
    }

    /**
     * Unsets Reference.
     */
    public function unsetReference(): void
    {
        $this->reference = [];
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Product Handle.
     */
    public function getProductHandle(): ?string
    {
        if (count($this->productHandle) == 0) {
            return null;
        }
        return $this->productHandle['value'];
    }

    /**
     * Sets Product Handle.
     *
     * @maps product_handle
     */
    public function setProductHandle(?string $productHandle): void
    {
        $this->productHandle['value'] = $productHandle;
    }

    /**
     * Unsets Product Handle.
     */
    public function unsetProductHandle(): void
    {
        $this->productHandle = [];
    }

    /**
     * Returns Product Price Point Id.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Product Price Point Handle.
     */
    public function getProductPricePointHandle(): ?string
    {
        return $this->productPricePointHandle;
    }

    /**
     * Sets Product Price Point Handle.
     *
     * @maps product_price_point_handle
     */
    public function setProductPricePointHandle(?string $productPricePointHandle): void
    {
        $this->productPricePointHandle = $productPricePointHandle;
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
     * Returns Coupon Code.
     */
    public function getCouponCode(): ?string
    {
        if (count($this->couponCode) == 0) {
            return null;
        }
        return $this->couponCode['value'];
    }

    /**
     * Sets Coupon Code.
     *
     * @maps coupon_code
     */
    public function setCouponCode(?string $couponCode): void
    {
        $this->couponCode['value'] = $couponCode;
    }

    /**
     * Unsets Coupon Code.
     */
    public function unsetCouponCode(): void
    {
        $this->couponCode = [];
    }

    /**
     * Returns Total Revenue in Cents.
     */
    public function getTotalRevenueInCents(): ?int
    {
        return $this->totalRevenueInCents;
    }

    /**
     * Sets Total Revenue in Cents.
     *
     * @maps total_revenue_in_cents
     */
    public function setTotalRevenueInCents(?int $totalRevenueInCents): void
    {
        $this->totalRevenueInCents = $totalRevenueInCents;
    }

    /**
     * Returns Balance in Cents.
     */
    public function getBalanceInCents(): ?int
    {
        return $this->balanceInCents;
    }

    /**
     * Sets Balance in Cents.
     *
     * @maps balance_in_cents
     */
    public function setBalanceInCents(?int $balanceInCents): void
    {
        $this->balanceInCents = $balanceInCents;
    }

    /**
     * Converts the SubscriptionGroupItem object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionGroupItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionGroupItem',
            [
                'id' => $this->id,
                'reference' => $this->getReference(),
                'productId' => $this->productId,
                'productHandle' => $this->getProductHandle(),
                'productPricePointId' => $this->productPricePointId,
                'productPricePointHandle' => $this->productPricePointHandle,
                'currency' => $this->currency,
                'couponCode' => $this->getCouponCode(),
                'totalRevenueInCents' => $this->totalRevenueInCents,
                'balanceInCents' => $this->balanceInCents,
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
        if (isset($this->id)) {
            $json['id']                         = $this->id;
        }
        if (!empty($this->reference)) {
            $json['reference']                  = $this->reference['value'];
        }
        if (isset($this->productId)) {
            $json['product_id']                 = $this->productId;
        }
        if (!empty($this->productHandle)) {
            $json['product_handle']             = $this->productHandle['value'];
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']     = $this->productPricePointId;
        }
        if (isset($this->productPricePointHandle)) {
            $json['product_price_point_handle'] = $this->productPricePointHandle;
        }
        if (isset($this->currency)) {
            $json['currency']                   = $this->currency;
        }
        if (!empty($this->couponCode)) {
            $json['coupon_code']                = $this->couponCode['value'];
        }
        if (isset($this->totalRevenueInCents)) {
            $json['total_revenue_in_cents']     = $this->totalRevenueInCents;
        }
        if (isset($this->balanceInCents)) {
            $json['balance_in_cents']           = $this->balanceInCents;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
