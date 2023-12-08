<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponUsage;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponUsage
 *
 * @see CouponUsage
 */
class CouponUsageBuilder
{
    /**
     * @var CouponUsage
     */
    private $instance;

    private function __construct(CouponUsage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new coupon usage Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponUsage());
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
     * Sets signups field.
     */
    public function signups(?int $value): self
    {
        $this->instance->setSignups($value);
        return $this;
    }

    /**
     * Sets savings field.
     */
    public function savings(?int $value): self
    {
        $this->instance->setSavings($value);
        return $this;
    }

    /**
     * Unsets savings field.
     */
    public function unsetSavings(): self
    {
        $this->instance->unsetSavings();
        return $this;
    }

    /**
     * Sets savings in cents field.
     */
    public function savingsInCents(?int $value): self
    {
        $this->instance->setSavingsInCents($value);
        return $this;
    }

    /**
     * Unsets savings in cents field.
     */
    public function unsetSavingsInCents(): self
    {
        $this->instance->unsetSavingsInCents();
        return $this;
    }

    /**
     * Sets revenue field.
     */
    public function revenue(?int $value): self
    {
        $this->instance->setRevenue($value);
        return $this;
    }

    /**
     * Unsets revenue field.
     */
    public function unsetRevenue(): self
    {
        $this->instance->unsetRevenue();
        return $this;
    }

    /**
     * Sets revenue in cents field.
     */
    public function revenueInCents(?int $value): self
    {
        $this->instance->setRevenueInCents($value);
        return $this;
    }

    /**
     * Initializes a new coupon usage object.
     */
    public function build(): CouponUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
