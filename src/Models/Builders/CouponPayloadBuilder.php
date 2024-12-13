<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponPayload;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponPayload
 *
 * @see CouponPayload
 */
class CouponPayloadBuilder
{
    /**
     * @var CouponPayload
     */
    private $instance;

    private function __construct(CouponPayload $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Coupon Payload Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponPayload());
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
     * Sets percentage field.
     *
     * @param string|float|null $value
     */
    public function percentage($value): self
    {
        $this->instance->setPercentage($value);
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
     * Sets product family id field.
     *
     * @param string|null $value
     */
    public function productFamilyId(?string $value): self
    {
        $this->instance->setProductFamilyId($value);
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
     * Initializes a new Coupon Payload object.
     */
    public function build(): CouponPayload
    {
        return CoreHelper::clone($this->instance);
    }
}
