<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdatePercentageCoupon;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOrUpdatePercentageCoupon
 *
 * @see CreateOrUpdatePercentageCoupon
 */
class CreateOrUpdatePercentageCouponBuilder
{
    /**
     * @var CreateOrUpdatePercentageCoupon
     */
    private $instance;

    private function __construct(CreateOrUpdatePercentageCoupon $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create or update percentage coupon Builder object.
     */
    public static function init(string $name, string $code, $percentage): self
    {
        return new self(new CreateOrUpdatePercentageCoupon($name, $code, $percentage));
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
     * Sets allow negative balance field.
     */
    public function allowNegativeBalance(?string $value): self
    {
        $this->instance->setAllowNegativeBalance($value);
        return $this;
    }

    /**
     * Sets recurring field.
     */
    public function recurring(?string $value): self
    {
        $this->instance->setRecurring($value);
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
     * Sets product family id field.
     */
    public function productFamilyId(?string $value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets stackable field.
     */
    public function stackable(?string $value): self
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
     * Initializes a new create or update percentage coupon object.
     */
    public function build(): CreateOrUpdatePercentageCoupon
    {
        return CoreHelper::clone($this->instance);
    }
}
