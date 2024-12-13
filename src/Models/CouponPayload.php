<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class CouponPayload implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|float|null
     */
    private $percentage;

    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var bool|null
     */
    private $allowNegativeBalance;

    /**
     * @var bool|null
     */
    private $recurring;

    /**
     * @var \DateTime|null
     */
    private $endDate;

    /**
     * @var string|null
     */
    private $productFamilyId;

    /**
     * @var bool|null
     */
    private $stackable;

    /**
     * @var string|null
     */
    private $compoundingStrategy;

    /**
     * @var bool|null
     */
    private $excludeMidPeriodAllocations;

    /**
     * @var bool|null
     */
    private $applyOnCancelAtEndOfPeriod;

    /**
     * @var bool|null
     */
    private $applyOnSubscriptionExpiration;

    /**
     * Returns Name.
     * Required when creating a new coupon. This name is not displayed to customers and is limited to 255
     * characters.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Required when creating a new coupon. This name is not displayed to customers and is limited to 255
     * characters.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Code.
     * Required when creating a new coupon. The code is limited to 255 characters. May contain uppercase
     * alphanumeric characters and these special characters (which allow for email addresses to be used):
     * “%”, “@”, “+”, “-”, “_”, and “.”
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Required when creating a new coupon. The code is limited to 255 characters. May contain uppercase
     * alphanumeric characters and these special characters (which allow for email addresses to be used):
     * “%”, “@”, “+”, “-”, “_”, and “.”
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Description.
     * Required when creating a new coupon. A description of the coupon that can be displayed to customers
     * in transactions and on statements. The description is limited to 255 characters.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Required when creating a new coupon. A description of the coupon that can be displayed to customers
     * in transactions and on statements. The description is limited to 255 characters.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Percentage.
     * Required when creating a new percentage coupon. Can't be used together with amount_in_cents.
     * Percentage discount
     *
     * @return string|float|null
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets Percentage.
     * Required when creating a new percentage coupon. Can't be used together with amount_in_cents.
     * Percentage discount
     *
     * @maps percentage
     * @mapsBy anyOf(oneOf(string,float),null)
     *
     * @param string|float|null $percentage
     */
    public function setPercentage($percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * Returns Amount in Cents.
     * Required when creating a new flat amount coupon. Can't be used together with percentage. Flat USD
     * discount
     */
    public function getAmountInCents(): ?int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     * Required when creating a new flat amount coupon. Can't be used together with percentage. Flat USD
     * discount
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Allow Negative Balance.
     * If set to true, discount is not limited (credits will carry forward to next billing). Can't be used
     * together with restrictions.
     */
    public function getAllowNegativeBalance(): ?bool
    {
        return $this->allowNegativeBalance;
    }

    /**
     * Sets Allow Negative Balance.
     * If set to true, discount is not limited (credits will carry forward to next billing). Can't be used
     * together with restrictions.
     *
     * @maps allow_negative_balance
     */
    public function setAllowNegativeBalance(?bool $allowNegativeBalance): void
    {
        $this->allowNegativeBalance = $allowNegativeBalance;
    }

    /**
     * Returns Recurring.
     */
    public function getRecurring(): ?bool
    {
        return $this->recurring;
    }

    /**
     * Sets Recurring.
     *
     * @maps recurring
     */
    public function setRecurring(?bool $recurring): void
    {
        $this->recurring = $recurring;
    }

    /**
     * Returns End Date.
     * After the end of the given day, this coupon code will be invalid for new signups. Recurring
     * discounts started before this date will continue to recur even after this date.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * After the end of the given day, this coupon code will be invalid for new signups. Recurring
     * discounts started before this date will continue to recur even after this date.
     *
     * @maps end_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setEndDate(?\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Product Family Id.
     */
    public function getProductFamilyId(): ?string
    {
        return $this->productFamilyId;
    }

    /**
     * Sets Product Family Id.
     *
     * @maps product_family_id
     */
    public function setProductFamilyId(?string $productFamilyId): void
    {
        $this->productFamilyId = $productFamilyId;
    }

    /**
     * Returns Stackable.
     * A stackable coupon can be combined with other coupons on a Subscription.
     */
    public function getStackable(): ?bool
    {
        return $this->stackable;
    }

    /**
     * Sets Stackable.
     * A stackable coupon can be combined with other coupons on a Subscription.
     *
     * @maps stackable
     */
    public function setStackable(?bool $stackable): void
    {
        $this->stackable = $stackable;
    }

    /**
     * Returns Compounding Strategy.
     * Applicable only to stackable coupons. For `compound`, Percentage-based discounts will be calculated
     * against the remaining price, after prior discounts have been calculated. For `full-price`,
     * Percentage-based discounts will always be calculated against the original item price, before other
     * discounts are applied.
     */
    public function getCompoundingStrategy(): ?string
    {
        return $this->compoundingStrategy;
    }

    /**
     * Sets Compounding Strategy.
     * Applicable only to stackable coupons. For `compound`, Percentage-based discounts will be calculated
     * against the remaining price, after prior discounts have been calculated. For `full-price`,
     * Percentage-based discounts will always be calculated against the original item price, before other
     * discounts are applied.
     *
     * @maps compounding_strategy
     * @factory \AdvancedBillingLib\Models\CompoundingStrategy::checkValue
     */
    public function setCompoundingStrategy(?string $compoundingStrategy): void
    {
        $this->compoundingStrategy = $compoundingStrategy;
    }

    /**
     * Returns Exclude Mid Period Allocations.
     */
    public function getExcludeMidPeriodAllocations(): ?bool
    {
        return $this->excludeMidPeriodAllocations;
    }

    /**
     * Sets Exclude Mid Period Allocations.
     *
     * @maps exclude_mid_period_allocations
     */
    public function setExcludeMidPeriodAllocations(?bool $excludeMidPeriodAllocations): void
    {
        $this->excludeMidPeriodAllocations = $excludeMidPeriodAllocations;
    }

    /**
     * Returns Apply on Cancel at End of Period.
     */
    public function getApplyOnCancelAtEndOfPeriod(): ?bool
    {
        return $this->applyOnCancelAtEndOfPeriod;
    }

    /**
     * Sets Apply on Cancel at End of Period.
     *
     * @maps apply_on_cancel_at_end_of_period
     */
    public function setApplyOnCancelAtEndOfPeriod(?bool $applyOnCancelAtEndOfPeriod): void
    {
        $this->applyOnCancelAtEndOfPeriod = $applyOnCancelAtEndOfPeriod;
    }

    /**
     * Returns Apply on Subscription Expiration.
     */
    public function getApplyOnSubscriptionExpiration(): ?bool
    {
        return $this->applyOnSubscriptionExpiration;
    }

    /**
     * Sets Apply on Subscription Expiration.
     *
     * @maps apply_on_subscription_expiration
     */
    public function setApplyOnSubscriptionExpiration(?bool $applyOnSubscriptionExpiration): void
    {
        $this->applyOnSubscriptionExpiration = $applyOnSubscriptionExpiration;
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
        if (isset($this->name)) {
            $json['name']                             = $this->name;
        }
        if (isset($this->code)) {
            $json['code']                             = $this->code;
        }
        if (isset($this->description)) {
            $json['description']                      = $this->description;
        }
        if (isset($this->percentage)) {
            $json['percentage']                       =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->percentage,
                    'anyOf(oneOf(string,float),null)'
                );
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']                  = $this->amountInCents;
        }
        if (isset($this->allowNegativeBalance)) {
            $json['allow_negative_balance']           = $this->allowNegativeBalance;
        }
        if (isset($this->recurring)) {
            $json['recurring']                        = $this->recurring;
        }
        if (isset($this->endDate)) {
            $json['end_date']                         = DateTimeHelper::toSimpleDate($this->endDate);
        }
        if (isset($this->productFamilyId)) {
            $json['product_family_id']                = $this->productFamilyId;
        }
        if (isset($this->stackable)) {
            $json['stackable']                        = $this->stackable;
        }
        if (isset($this->compoundingStrategy)) {
            $json['compounding_strategy']             = CompoundingStrategy::checkValue($this->compoundingStrategy);
        }
        if (isset($this->excludeMidPeriodAllocations)) {
            $json['exclude_mid_period_allocations']   = $this->excludeMidPeriodAllocations;
        }
        if (isset($this->applyOnCancelAtEndOfPeriod)) {
            $json['apply_on_cancel_at_end_of_period'] = $this->applyOnCancelAtEndOfPeriod;
        }
        if (isset($this->applyOnSubscriptionExpiration)) {
            $json['apply_on_subscription_expiration'] = $this->applyOnSubscriptionExpiration;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
