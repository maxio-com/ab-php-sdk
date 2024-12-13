<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CouponCurrency;
use AdvancedBillingLib\Models\CouponRestriction;
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
     * Initializes a new Coupon Builder object.
     */
    public static function init(): self
    {
        return new self(new Coupon());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets code field.
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param float|null $value
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
     *
     * @param int|null $value
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
     *
     * @param int|null $value
     */
    public function productFamilyId(?int $value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets product family name field.
     *
     * @param string|null $value
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
     *
     * @param \DateTime|null $value
     */
    public function startDate(?\DateTime $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Sets end date field.
     *
     * @param \DateTime|null $value
     */
    public function endDate(?\DateTime $value): self
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
     *
     * @param string|null $value
     */
    public function percentage(?string $value): self
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
     *
     * @param bool|null $value
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets recurring scheme field.
     *
     * @param string|null $value
     */
    public function recurringScheme(?string $value): self
    {
        $this->instance->setRecurringScheme($value);
        return $this;
    }

    /**
     * Sets duration period count field.
     *
     * @param int|null $value
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
     *
     * @param int|null $value
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
     *
     * @param string|null $value
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
     *
     * @param string|null $value
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
     *
     * @param bool|null $value
     */
    public function allowNegativeBalance(?bool $value): self
    {
        $this->instance->setAllowNegativeBalance($value);
        return $this;
    }

    /**
     * Sets archived at field.
     *
     * @param \DateTime|null $value
     */
    public function archivedAt(?\DateTime $value): self
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
     *
     * @param string|null $value
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
     *
     * @param bool|null $value
     */
    public function stackable(?bool $value): self
    {
        $this->instance->setStackable($value);
        return $this;
    }

    /**
     * Sets compounding strategy field.
     *
     * @param string|null $value
     */
    public function compoundingStrategy(?string $value): self
    {
        $this->instance->setCompoundingStrategy($value);
        return $this;
    }

    /**
     * Unsets compounding strategy field.
     */
    public function unsetCompoundingStrategy(): self
    {
        $this->instance->unsetCompoundingStrategy();
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     *
     * @param bool|null $value
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets discount type field.
     *
     * @param string|null $value
     */
    public function discountType(?string $value): self
    {
        $this->instance->setDiscountType($value);
        return $this;
    }

    /**
     * Sets exclude mid period allocations field.
     *
     * @param bool|null $value
     */
    public function excludeMidPeriodAllocations(?bool $value): self
    {
        $this->instance->setExcludeMidPeriodAllocations($value);
        return $this;
    }

    /**
     * Sets apply on cancel at end of period field.
     *
     * @param bool|null $value
     */
    public function applyOnCancelAtEndOfPeriod(?bool $value): self
    {
        $this->instance->setApplyOnCancelAtEndOfPeriod($value);
        return $this;
    }

    /**
     * Sets apply on subscription expiration field.
     *
     * @param bool|null $value
     */
    public function applyOnSubscriptionExpiration(?bool $value): self
    {
        $this->instance->setApplyOnSubscriptionExpiration($value);
        return $this;
    }

    /**
     * Sets coupon restrictions field.
     *
     * @param CouponRestriction[]|null $value
     */
    public function couponRestrictions(?array $value): self
    {
        $this->instance->setCouponRestrictions($value);
        return $this;
    }

    /**
     * Sets currency prices field.
     *
     * @param CouponCurrency[]|null $value
     */
    public function currencyPrices(?array $value): self
    {
        $this->instance->setCurrencyPrices($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Coupon object.
     */
    public function build(): Coupon
    {
        return CoreHelper::clone($this->instance);
    }
}
