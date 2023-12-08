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

class ReactivateSubscriptionRequest implements \JsonSerializable
{
    /**
     * @var ReactivationBilling|null
     */
    private $calendarBilling;

    /**
     * @var bool|null
     */
    private $includeTrial;

    /**
     * @var bool|null
     */
    private $preserveBalance;

    /**
     * @var string|null
     */
    private $couponCode;

    /**
     * @var bool|null
     */
    private $useCreditsAndPrepayments;

    /**
     * @var bool|ResumeOptions|null
     */
    private $resume;

    /**
     * Returns Calendar Billing.
     * These values are only applicable to subscriptions using calendar billing
     */
    public function getCalendarBilling(): ?ReactivationBilling
    {
        return $this->calendarBilling;
    }

    /**
     * Sets Calendar Billing.
     * These values are only applicable to subscriptions using calendar billing
     *
     * @maps calendar_billing
     */
    public function setCalendarBilling(?ReactivationBilling $calendarBilling): void
    {
        $this->calendarBilling = $calendarBilling;
    }

    /**
     * Returns Include Trial.
     * If `true` is sent, the reactivated Subscription will include a trial if one is available. If `false`
     * is sent, the trial period will be ignored.
     */
    public function getIncludeTrial(): ?bool
    {
        return $this->includeTrial;
    }

    /**
     * Sets Include Trial.
     * If `true` is sent, the reactivated Subscription will include a trial if one is available. If `false`
     * is sent, the trial period will be ignored.
     *
     * @maps include_trial
     */
    public function setIncludeTrial(?bool $includeTrial): void
    {
        $this->includeTrial = $includeTrial;
    }

    /**
     * Returns Preserve Balance.
     * If `true` is passed, the existing subscription balance will NOT be cleared/reset before adding the
     * additional reactivation charges.
     */
    public function getPreserveBalance(): ?bool
    {
        return $this->preserveBalance;
    }

    /**
     * Sets Preserve Balance.
     * If `true` is passed, the existing subscription balance will NOT be cleared/reset before adding the
     * additional reactivation charges.
     *
     * @maps preserve_balance
     */
    public function setPreserveBalance(?bool $preserveBalance): void
    {
        $this->preserveBalance = $preserveBalance;
    }

    /**
     * Returns Coupon Code.
     * The coupon code to be applied during reactivation.
     */
    public function getCouponCode(): ?string
    {
        return $this->couponCode;
    }

    /**
     * Sets Coupon Code.
     * The coupon code to be applied during reactivation.
     *
     * @maps coupon_code
     */
    public function setCouponCode(?string $couponCode): void
    {
        $this->couponCode = $couponCode;
    }

    /**
     * Returns Use Credits and Prepayments.
     * If true is sent, Chargify will use service credits and prepayments upon reactivation. If false is
     * sent, the service credits and prepayments will be ignored.
     */
    public function getUseCreditsAndPrepayments(): ?bool
    {
        return $this->useCreditsAndPrepayments;
    }

    /**
     * Sets Use Credits and Prepayments.
     * If true is sent, Chargify will use service credits and prepayments upon reactivation. If false is
     * sent, the service credits and prepayments will be ignored.
     *
     * @maps use_credits_and_prepayments
     */
    public function setUseCreditsAndPrepayments(?bool $useCreditsAndPrepayments): void
    {
        $this->useCreditsAndPrepayments = $useCreditsAndPrepayments;
    }

    /**
     * Returns Resume.
     * If `true`, Chargify will attempt to resume the subscription's billing period. if not resumable, the
     * subscription will be reactivated with a new billing period. If `false`: Chargify will only attempt
     * to reactivate the subscription.
     *
     * @return bool|ResumeOptions|null
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Sets Resume.
     * If `true`, Chargify will attempt to resume the subscription's billing period. if not resumable, the
     * subscription will be reactivated with a new billing period. If `false`: Chargify will only attempt
     * to reactivate the subscription.
     *
     * @maps resume
     * @mapsBy anyOf(oneOf(bool,ResumeOptions),null)
     *
     * @param bool|ResumeOptions|null $resume
     */
    public function setResume($resume): void
    {
        $this->resume = $resume;
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
        if (isset($this->calendarBilling)) {
            $json['calendar_billing']            = $this->calendarBilling;
        }
        if (isset($this->includeTrial)) {
            $json['include_trial']               = $this->includeTrial;
        }
        if (isset($this->preserveBalance)) {
            $json['preserve_balance']            = $this->preserveBalance;
        }
        if (isset($this->couponCode)) {
            $json['coupon_code']                 = $this->couponCode;
        }
        if (isset($this->useCreditsAndPrepayments)) {
            $json['use_credits_and_prepayments'] = $this->useCreditsAndPrepayments;
        }
        if (isset($this->resume)) {
            $json['resume']                      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->resume,
                    'anyOf(oneOf(bool,ResumeOptions),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
