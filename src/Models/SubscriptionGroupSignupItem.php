<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupSignupItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $productHandle;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var string|null
     */
    private $productPricePointHandle;

    /**
     * @var int|null
     */
    private $offerId;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var bool|null
     */
    private $primary;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string[]|null
     */
    private $couponCodes;

    /**
     * @var SubscriptionGroupSignupComponent[]|null
     */
    private $components;

    /**
     * @var SubscriptionCustomPrice|null
     */
    private $customPrice;

    /**
     * @var CalendarBilling|null
     */
    private $calendarBilling;

    /**
     * @var array<string,string>|null
     */
    private $metafields;

    /**
     * Returns Product Handle.
     * The API Handle of the product for which you are creating a subscription. Required, unless a
     * `product_id` is given instead.
     */
    public function getProductHandle(): ?string
    {
        return $this->productHandle;
    }

    /**
     * Sets Product Handle.
     * The API Handle of the product for which you are creating a subscription. Required, unless a
     * `product_id` is given instead.
     *
     * @maps product_handle
     */
    public function setProductHandle(?string $productHandle): void
    {
        $this->productHandle = $productHandle;
    }

    /**
     * Returns Product Id.
     * The Product ID of the product for which you are creating a subscription. You can pass either
     * `product_id` or `product_handle`.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * The Product ID of the product for which you are creating a subscription. You can pass either
     * `product_id` or `product_handle`.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Product Price Point Id.
     * The ID of the particular price point on the product.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     * The ID of the particular price point on the product.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Product Price Point Handle.
     * The user-friendly API handle of a product's particular price point.
     */
    public function getProductPricePointHandle(): ?string
    {
        return $this->productPricePointHandle;
    }

    /**
     * Sets Product Price Point Handle.
     * The user-friendly API handle of a product's particular price point.
     *
     * @maps product_price_point_handle
     */
    public function setProductPricePointHandle(?string $productPricePointHandle): void
    {
        $this->productPricePointHandle = $productPricePointHandle;
    }

    /**
     * Returns Offer Id.
     * Use in place of passing product and component information to set up the subscription with an
     * existing offer. May be either the Chargify ID of the offer or its handle prefixed with `handle:`
     */
    public function getOfferId(): ?int
    {
        return $this->offerId;
    }

    /**
     * Sets Offer Id.
     * Use in place of passing product and component information to set up the subscription with an
     * existing offer. May be either the Chargify ID of the offer or its handle prefixed with `handle:`
     *
     * @maps offer_id
     */
    public function setOfferId(?int $offerId): void
    {
        $this->offerId = $offerId;
    }

    /**
     * Returns Reference.
     * The reference value (provided by your app) for the subscription itelf.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     * The reference value (provided by your app) for the subscription itelf.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Primary.
     * One of the subscriptions must be marked as primary in the group.
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }

    /**
     * Sets Primary.
     * One of the subscriptions must be marked as primary in the group.
     *
     * @maps primary
     */
    public function setPrimary(?bool $primary): void
    {
        $this->primary = $primary;
    }

    /**
     * Returns Currency.
     * (Optional) If Multi-Currency is enabled and the currency is configured in Chargify, pass it at
     * signup to create a subscription on a non-default currency. Note that you cannot update the currency
     * of an existing subscription.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * (Optional) If Multi-Currency is enabled and the currency is configured in Chargify, pass it at
     * signup to create a subscription on a non-default currency. Note that you cannot update the currency
     * of an existing subscription.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Coupon Codes.
     * An array for all the coupons attached to the subscription.
     *
     * @return string[]|null
     */
    public function getCouponCodes(): ?array
    {
        return $this->couponCodes;
    }

    /**
     * Sets Coupon Codes.
     * An array for all the coupons attached to the subscription.
     *
     * @maps coupon_codes
     *
     * @param string[]|null $couponCodes
     */
    public function setCouponCodes(?array $couponCodes): void
    {
        $this->couponCodes = $couponCodes;
    }

    /**
     * Returns Components.
     *
     * @return SubscriptionGroupSignupComponent[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Sets Components.
     *
     * @maps components
     *
     * @param SubscriptionGroupSignupComponent[]|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }

    /**
     * Returns Custom Price.
     * (Optional) Used in place of `product_price_point_id` to define a custom price point unique to the
     * subscription
     */
    public function getCustomPrice(): ?SubscriptionCustomPrice
    {
        return $this->customPrice;
    }

    /**
     * Sets Custom Price.
     * (Optional) Used in place of `product_price_point_id` to define a custom price point unique to the
     * subscription
     *
     * @maps custom_price
     */
    public function setCustomPrice(?SubscriptionCustomPrice $customPrice): void
    {
        $this->customPrice = $customPrice;
    }

    /**
     * Returns Calendar Billing.
     * (Optional). Cannot be used when also specifying next_billing_at
     */
    public function getCalendarBilling(): ?CalendarBilling
    {
        return $this->calendarBilling;
    }

    /**
     * Sets Calendar Billing.
     * (Optional). Cannot be used when also specifying next_billing_at
     *
     * @maps calendar_billing
     */
    public function setCalendarBilling(?CalendarBilling $calendarBilling): void
    {
        $this->calendarBilling = $calendarBilling;
    }

    /**
     * Returns Metafields.
     * (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be
     * created “on-the-fly” in your site for a given key, if they have not been created yet.
     *
     * @return array<string,string>|null
     */
    public function getMetafields(): ?array
    {
        return $this->metafields;
    }

    /**
     * Sets Metafields.
     * (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be
     * created “on-the-fly” in your site for a given key, if they have not been created yet.
     *
     * @maps metafields
     *
     * @param array<string,string>|null $metafields
     */
    public function setMetafields(?array $metafields): void
    {
        $this->metafields = $metafields;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->productHandle)) {
            $json['product_handle']             = $this->productHandle;
        }
        if (isset($this->productId)) {
            $json['product_id']                 = $this->productId;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']     = $this->productPricePointId;
        }
        if (isset($this->productPricePointHandle)) {
            $json['product_price_point_handle'] = $this->productPricePointHandle;
        }
        if (isset($this->offerId)) {
            $json['offer_id']                   = $this->offerId;
        }
        if (isset($this->reference)) {
            $json['reference']                  = $this->reference;
        }
        if (isset($this->primary)) {
            $json['primary']                    = $this->primary;
        }
        if (isset($this->currency)) {
            $json['currency']                   = $this->currency;
        }
        if (isset($this->couponCodes)) {
            $json['coupon_codes']               = $this->couponCodes;
        }
        if (isset($this->components)) {
            $json['components']                 = $this->components;
        }
        if (isset($this->customPrice)) {
            $json['custom_price']               = $this->customPrice;
        }
        if (isset($this->calendarBilling)) {
            $json['calendar_billing']           = $this->calendarBilling;
        }
        if (isset($this->metafields)) {
            $json['metafields']                 = $this->metafields;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
