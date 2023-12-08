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
}
