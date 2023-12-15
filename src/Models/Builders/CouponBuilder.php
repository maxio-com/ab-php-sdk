<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Coupon;
use Core\Utils\CoreHelper;

/**
 * Builder for model Coupon
 *
 * @see Coupon
 */
class CouponBuilder
{
    /**
     * @var Coupon
     */
    private $instance;

    private function __construct(Coupon $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new coupon Builder object.
     */
    public static function init(): self
    {
        return new self(new Coupon());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?float $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Unsets amount field.
     */
    public function unsetAmount(): self
    {
        $this->instance->unsetAmount();
        return $this;
    }

    /**
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Unsets amount in cents field.
     */
    public function unsetAmountInCents(): self
    {
        $this->instance->unsetAmountInCents();
        return $this;
    }

    /**
     * Sets product family id field.
     */
    public function productFamilyId(?int $value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets product family name field.
     */
    public function productFamilyName(?string $value): self
    {
        $this->instance->setProductFamilyName($value);
        return $this;
    }

    /**
     * Unsets product family name field.
     */
    public function unsetProductFamilyName(): self
    {
        $this->instance->unsetProductFamilyName();
        return $this;
    }

    /**
     * Sets start date field.
     */
    public function startDate(?string $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Sets end date field.
     */
    public function endDate(?string $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Unsets end date field.
     */
    public function unsetEndDate(): self
    {
        $this->instance->unsetEndDate();
        return $this;
    }

    /**
     * Sets percentage field.
     */
    public function percentage(?float $value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Unsets percentage field.
     */
    public function unsetPercentage(): self
    {
        $this->instance->unsetPercentage();
        return $this;
    }

    /**
     * Sets recurring field.
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets recurring scheme field.
     */
    public function recurringScheme(?string $value): self
    {
        $this->instance->setRecurringScheme($value);
        return $this;
    }

    /**
     * Sets duration period count field.
     */
    public function durationPeriodCount(?int $value): self
    {
        $this->instance->setDurationPeriodCount($value);
        return $this;
    }

    /**
     * Unsets duration period count field.
     */
    public function unsetDurationPeriodCount(): self
    {
        $this->instance->unsetDurationPeriodCount();
        return $this;
    }

    /**
     * Sets duration interval field.
     */
    public function durationInterval(?int $value): self
    {
        $this->instance->setDurationInterval($value);
        return $this;
    }

    /**
     * Unsets duration interval field.
     */
    public function unsetDurationInterval(): self
    {
        $this->instance->unsetDurationInterval();
        return $this;
    }

    /**
     * Sets duration interval unit field.
     */
    public function durationIntervalUnit(?string $value): self
    {
        $this->instance->setDurationIntervalUnit($value);
        return $this;
    }

    /**
     * Unsets duration interval unit field.
     */
    public function unsetDurationIntervalUnit(): self
    {
        $this->instance->unsetDurationIntervalUnit();
        return $this;
    }

    /**
     * Sets duration interval span field.
     */
    public function durationIntervalSpan(?string $value): self
    {
        $this->instance->setDurationIntervalSpan($value);
        return $this;
    }

    /**
     * Unsets duration interval span field.
     */
    public function unsetDurationIntervalSpan(): self
    {
        $this->instance->unsetDurationIntervalSpan();
        return $this;
    }

    /**
     * Sets allow negative balance field.
     */
    public function allowNegativeBalance(?bool $value): self
    {
        $this->instance->setAllowNegativeBalance($value);
        return $this;
    }

    /**
     * Sets archived at field.
     */
    public function archivedAt(?string $value): self
    {
        $this->instance->setArchivedAt($value);
        return $this;
    }

    /**
     * Unsets archived at field.
     */
    public function unsetArchivedAt(): self
    {
        $this->instance->unsetArchivedAt();
        return $this;
    }

    /**
     * Sets conversion limit field.
     */
    public function conversionLimit(?string $value): self
    {
        $this->instance->setConversionLimit($value);
        return $this;
    }

    /**
     * Unsets conversion limit field.
     */
    public function unsetConversionLimit(): self
    {
        $this->instance->unsetConversionLimit();
        return $this;
    }

    /**
     * Sets stackable field.
     */
    public function stackable(?bool $value): self
    {
        $this->instance->setStackable($value);
        return $this;
    }

    /**
     * Sets compounding strategy field.
     */
    public function compoundingStrategy(?string $value): self
    {
        $this->instance->setCompoundingStrategy($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?string $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets discount type field.
     */
    public function discountType(?string $value): self
    {
        $this->instance->setDiscountType($value);
        return $this;
    }

    /**
     * Sets exclude mid period allocations field.
     */
    public function excludeMidPeriodAllocations(?bool $value): self
    {
        $this->instance->setExcludeMidPeriodAllocations($value);
        return $this;
    }

    /**
     * Sets apply on cancel at end of period field.
     */
    public function applyOnCancelAtEndOfPeriod(?bool $value): self
    {
        $this->instance->setApplyOnCancelAtEndOfPeriod($value);
        return $this;
    }

    /**
     * Sets coupon restrictions field.
     */
    public function couponRestrictions(?array $value): self
    {
        $this->instance->setCouponRestrictions($value);
        return $this;
    }

    /**
     * Initializes a new coupon object.
     */
    public function build(): Coupon
    {
        return CoreHelper::clone($this->instance);
    }
}
