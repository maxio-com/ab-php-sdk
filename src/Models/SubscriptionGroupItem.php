<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
