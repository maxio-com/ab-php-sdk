<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class SubscriptionAddCouponErrorException extends ApiException
{
    /**
     * @var string[]|null
     */
    private $codes;

    /**
     * @var string[]|null
     */
    private $couponCode;

    /**
     * @var string[]|null
     */
    private $couponCodes;

    /**
     * @var string[]|null
     */
    private $subscription;

    /**
     * Returns Codes.
     *
     * @return string[]|null
     */
    public function getCodes(): ?array
    {
        return $this->codes;
    }

    /**
     * Sets Codes.
     *
     * @maps codes
     *
     * @param string[]|null $codes
     */
    public function setCodes(?array $codes): void
    {
        $this->codes = $codes;
    }

    /**
     * Returns Coupon Code.
     *
     * @return string[]|null
     */
    public function getCouponCode(): ?array
    {
        return $this->couponCode;
    }

    /**
     * Sets Coupon Code.
     *
     * @maps coupon_code
     *
     * @param string[]|null $couponCode
     */
    public function setCouponCode(?array $couponCode): void
    {
        $this->couponCode = $couponCode;
    }

    /**
     * Returns Coupon Codes.
     *
     * @return string[]|null
     */
    public function getCouponCodes(): ?array
    {
        return $this->couponCodes;
    }

    /**
     * Sets Coupon Codes.
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
     * Returns Subscription.
     *
     * @return string[]|null
     */
    public function getSubscription(): ?array
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     *
     * @maps subscription
     *
     * @param string[]|null $subscription
     */
    public function setSubscription(?array $subscription): void
    {
        $this->subscription = $subscription;
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
}
