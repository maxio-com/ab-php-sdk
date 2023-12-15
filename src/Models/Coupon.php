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

class Coupon implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

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
     * @var array
     */
    private $amount = [];

    /**
     * @var array
     */
    private $amountInCents = [];

    /**
     * @var int|null
     */
    private $productFamilyId;

    /**
     * @var array
     */
    private $productFamilyName = [];

    /**
     * @var string|null
     */
    private $startDate;

    /**
     * @var array
     */
    private $endDate = [];

    /**
     * @var array
     */
    private $percentage = [];

    /**
     * @var bool|null
     */
    private $recurring;

    /**
     * @var string|null
     */
    private $recurringScheme;

    /**
     * @var array
     */
    private $durationPeriodCount = [];

    /**
     * @var array
     */
    private $durationInterval = [];

    /**
     * @var array
     */
    private $durationIntervalUnit = [];

    /**
     * @var array
     */
    private $durationIntervalSpan = [];

    /**
     * @var bool|null
     */
    private $allowNegativeBalance;

    /**
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var array
     */
    private $conversionLimit = [];

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
    private $useSiteExchangeRate;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $discountType;

    /**
     * @var bool|null
     */
    private $excludeMidPeriodAllocations;

    /**
     * @var bool|null
     */
    private $applyOnCancelAtEndOfPeriod;

    /**
     * @var CouponRestriction[]|null
     */
    private $couponRestrictions;

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
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?float
    {
        if (count($this->amount) == 0) {
            return null;
        }
        return $this->amount['value'];
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?float $amount): void
    {
        $this->amount['value'] = $amount;
    }

    /**
     * Unsets Amount.
     */
    public function unsetAmount(): void
    {
        $this->amount = [];
    }

    /**
     * Returns Amount in Cents.
     */
    public function getAmountInCents(): ?int
    {
        if (count($this->amountInCents) == 0) {
            return null;
        }
        return $this->amountInCents['value'];
    }

    /**
     * Sets Amount in Cents.
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents['value'] = $amountInCents;
    }

    /**
     * Unsets Amount in Cents.
     */
    public function unsetAmountInCents(): void
    {
        $this->amountInCents = [];
    }

    /**
     * Returns Product Family Id.
     */
    public function getProductFamilyId(): ?int
    {
        return $this->productFamilyId;
    }

    /**
     * Sets Product Family Id.
     *
     * @maps product_family_id
     */
    public function setProductFamilyId(?int $productFamilyId): void
    {
        $this->productFamilyId = $productFamilyId;
    }

    /**
     * Returns Product Family Name.
     */
    public function getProductFamilyName(): ?string
    {
        if (count($this->productFamilyName) == 0) {
            return null;
        }
        return $this->productFamilyName['value'];
    }

    /**
     * Sets Product Family Name.
     *
     * @maps product_family_name
     */
    public function setProductFamilyName(?string $productFamilyName): void
    {
        $this->productFamilyName['value'] = $productFamilyName;
    }

    /**
     * Unsets Product Family Name.
     */
    public function unsetProductFamilyName(): void
    {
        $this->productFamilyName = [];
    }

    /**
     * Returns Start Date.
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     *
     * @maps start_date
     */
    public function setStartDate(?string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns End Date.
     */
    public function getEndDate(): ?string
    {
        if (count($this->endDate) == 0) {
            return null;
        }
        return $this->endDate['value'];
    }

    /**
     * Sets End Date.
     *
     * @maps end_date
     */
    public function setEndDate(?string $endDate): void
    {
        $this->endDate['value'] = $endDate;
    }

    /**
     * Unsets End Date.
     */
    public function unsetEndDate(): void
    {
        $this->endDate = [];
    }

    /**
     * Returns Percentage.
     */
    public function getPercentage(): ?float
    {
        if (count($this->percentage) == 0) {
            return null;
        }
        return $this->percentage['value'];
    }

    /**
     * Sets Percentage.
     *
     * @maps percentage
     */
    public function setPercentage(?float $percentage): void
    {
        $this->percentage['value'] = $percentage;
    }

    /**
     * Unsets Percentage.
     */
    public function unsetPercentage(): void
    {
        $this->percentage = [];
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
     * Returns Recurring Scheme.
     */
    public function getRecurringScheme(): ?string
    {
        return $this->recurringScheme;
    }

    /**
     * Sets Recurring Scheme.
     *
     * @maps recurring_scheme
     * @factory \AdvancedBillingLib\Models\RecurringScheme::checkValue
     */
    public function setRecurringScheme(?string $recurringScheme): void
    {
        $this->recurringScheme = $recurringScheme;
    }

    /**
     * Returns Duration Period Count.
     */
    public function getDurationPeriodCount(): ?int
    {
        if (count($this->durationPeriodCount) == 0) {
            return null;
        }
        return $this->durationPeriodCount['value'];
    }

    /**
     * Sets Duration Period Count.
     *
     * @maps duration_period_count
     */
    public function setDurationPeriodCount(?int $durationPeriodCount): void
    {
        $this->durationPeriodCount['value'] = $durationPeriodCount;
    }

    /**
     * Unsets Duration Period Count.
     */
    public function unsetDurationPeriodCount(): void
    {
        $this->durationPeriodCount = [];
    }

    /**
     * Returns Duration Interval.
     */
    public function getDurationInterval(): ?int
    {
        if (count($this->durationInterval) == 0) {
            return null;
        }
        return $this->durationInterval['value'];
    }

    /**
     * Sets Duration Interval.
     *
     * @maps duration_interval
     */
    public function setDurationInterval(?int $durationInterval): void
    {
        $this->durationInterval['value'] = $durationInterval;
    }

    /**
     * Unsets Duration Interval.
     */
    public function unsetDurationInterval(): void
    {
        $this->durationInterval = [];
    }

    /**
     * Returns Duration Interval Unit.
     */
    public function getDurationIntervalUnit(): ?string
    {
        if (count($this->durationIntervalUnit) == 0) {
            return null;
        }
        return $this->durationIntervalUnit['value'];
    }

    /**
     * Sets Duration Interval Unit.
     *
     * @maps duration_interval_unit
     */
    public function setDurationIntervalUnit(?string $durationIntervalUnit): void
    {
        $this->durationIntervalUnit['value'] = $durationIntervalUnit;
    }

    /**
     * Unsets Duration Interval Unit.
     */
    public function unsetDurationIntervalUnit(): void
    {
        $this->durationIntervalUnit = [];
    }

    /**
     * Returns Duration Interval Span.
     */
    public function getDurationIntervalSpan(): ?string
    {
        if (count($this->durationIntervalSpan) == 0) {
            return null;
        }
        return $this->durationIntervalSpan['value'];
    }

    /**
     * Sets Duration Interval Span.
     *
     * @maps duration_interval_span
     */
    public function setDurationIntervalSpan(?string $durationIntervalSpan): void
    {
        $this->durationIntervalSpan['value'] = $durationIntervalSpan;
    }

    /**
     * Unsets Duration Interval Span.
     */
    public function unsetDurationIntervalSpan(): void
    {
        $this->durationIntervalSpan = [];
    }

    /**
     * Returns Allow Negative Balance.
     */
    public function getAllowNegativeBalance(): ?bool
    {
        return $this->allowNegativeBalance;
    }

    /**
     * Sets Allow Negative Balance.
     *
     * @maps allow_negative_balance
     */
    public function setAllowNegativeBalance(?bool $allowNegativeBalance): void
    {
        $this->allowNegativeBalance = $allowNegativeBalance;
    }

    /**
     * Returns Archived At.
     */
    public function getArchivedAt(): ?string
    {
        if (count($this->archivedAt) == 0) {
            return null;
        }
        return $this->archivedAt['value'];
    }

    /**
     * Sets Archived At.
     *
     * @maps archived_at
     */
    public function setArchivedAt(?string $archivedAt): void
    {
        $this->archivedAt['value'] = $archivedAt;
    }

    /**
     * Unsets Archived At.
     */
    public function unsetArchivedAt(): void
    {
        $this->archivedAt = [];
    }

    /**
     * Returns Conversion Limit.
     */
    public function getConversionLimit(): ?string
    {
        if (count($this->conversionLimit) == 0) {
            return null;
        }
        return $this->conversionLimit['value'];
    }

    /**
     * Sets Conversion Limit.
     *
     * @maps conversion_limit
     */
    public function setConversionLimit(?string $conversionLimit): void
    {
        $this->conversionLimit['value'] = $conversionLimit;
    }

    /**
     * Unsets Conversion Limit.
     */
    public function unsetConversionLimit(): void
    {
        $this->conversionLimit = [];
    }

    /**
     * Returns Stackable.
     */
    public function getStackable(): ?bool
    {
        return $this->stackable;
    }

    /**
     * Sets Stackable.
     *
     * @maps stackable
     */
    public function setStackable(?bool $stackable): void
    {
        $this->stackable = $stackable;
    }

    /**
     * Returns Compounding Strategy.
     */
    public function getCompoundingStrategy(): ?string
    {
        return $this->compoundingStrategy;
    }

    /**
     * Sets Compounding Strategy.
     *
     * @maps compounding_strategy
     * @mapsBy anyOf(anyOf(CompoundingStrategy),null)
     * @factory \AdvancedBillingLib\Models\CompoundingStrategy::checkValue CompoundingStrategy
     */
    public function setCompoundingStrategy(?string $compoundingStrategy): void
    {
        $this->compoundingStrategy = $compoundingStrategy;
    }

    /**
     * Returns Use Site Exchange Rate.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Discount Type.
     */
    public function getDiscountType(): ?string
    {
        return $this->discountType;
    }

    /**
     * Sets Discount Type.
     *
     * @maps discount_type
     * @factory \AdvancedBillingLib\Models\DiscountType::checkValue
     */
    public function setDiscountType(?string $discountType): void
    {
        $this->discountType = $discountType;
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
     * Returns Coupon Restrictions.
     *
     * @return CouponRestriction[]|null
     */
    public function getCouponRestrictions(): ?array
    {
        return $this->couponRestrictions;
    }

    /**
     * Sets Coupon Restrictions.
     *
     * @maps coupon_restrictions
     *
     * @param CouponRestriction[]|null $couponRestrictions
     */
    public function setCouponRestrictions(?array $couponRestrictions): void
    {
        $this->couponRestrictions = $couponRestrictions;
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
            $json['id']                               = $this->id;
        }
        if (isset($this->name)) {
            $json['name']                             = $this->name;
        }
        if (isset($this->code)) {
            $json['code']                             = $this->code;
        }
        if (isset($this->description)) {
            $json['description']                      = $this->description;
        }
        if (!empty($this->amount)) {
            $json['amount']                           = $this->amount['value'];
        }
        if (!empty($this->amountInCents)) {
            $json['amount_in_cents']                  = $this->amountInCents['value'];
        }
        if (isset($this->productFamilyId)) {
            $json['product_family_id']                = $this->productFamilyId;
        }
        if (!empty($this->productFamilyName)) {
            $json['product_family_name']              = $this->productFamilyName['value'];
        }
        if (isset($this->startDate)) {
            $json['start_date']                       = $this->startDate;
        }
        if (!empty($this->endDate)) {
            $json['end_date']                         = $this->endDate['value'];
        }
        if (!empty($this->percentage)) {
            $json['percentage']                       = $this->percentage['value'];
        }
        if (isset($this->recurring)) {
            $json['recurring']                        = $this->recurring;
        }
        if (isset($this->recurringScheme)) {
            $json['recurring_scheme']                 = RecurringScheme::checkValue($this->recurringScheme);
        }
        if (!empty($this->durationPeriodCount)) {
            $json['duration_period_count']            = $this->durationPeriodCount['value'];
        }
        if (!empty($this->durationInterval)) {
            $json['duration_interval']                = $this->durationInterval['value'];
        }
        if (!empty($this->durationIntervalUnit)) {
            $json['duration_interval_unit']           = $this->durationIntervalUnit['value'];
        }
        if (!empty($this->durationIntervalSpan)) {
            $json['duration_interval_span']           = $this->durationIntervalSpan['value'];
        }
        if (isset($this->allowNegativeBalance)) {
            $json['allow_negative_balance']           = $this->allowNegativeBalance;
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']                      = $this->archivedAt['value'];
        }
        if (!empty($this->conversionLimit)) {
            $json['conversion_limit']                 = $this->conversionLimit['value'];
        }
        if (isset($this->stackable)) {
            $json['stackable']                        = $this->stackable;
        }
        if (isset($this->compoundingStrategy)) {
            $json['compounding_strategy']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->compoundingStrategy,
                    'anyOf(anyOf(CompoundingStrategy),null)',
                    [
                        '\AdvancedBillingLib\Models\CompoundingStrategy::checkValue CompoundingStrategy'
                    ]
                );
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']           = $this->useSiteExchangeRate;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                       = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                       = $this->updatedAt;
        }
        if (isset($this->discountType)) {
            $json['discount_type']                    = DiscountType::checkValue($this->discountType);
        }
        if (isset($this->excludeMidPeriodAllocations)) {
            $json['exclude_mid_period_allocations']   = $this->excludeMidPeriodAllocations;
        }
        if (isset($this->applyOnCancelAtEndOfPeriod)) {
            $json['apply_on_cancel_at_end_of_period'] = $this->applyOnCancelAtEndOfPeriod;
        }
        if (isset($this->couponRestrictions)) {
            $json['coupon_restrictions']              = $this->couponRestrictions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
