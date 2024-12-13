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
     * Initializes a new Coupon Usage Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponUsage());
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
     * Sets signups field.
     *
     * @param int|null $value
     */
    public function signups(?int $value): self
    {
        $this->instance->setSignups($value);
        return $this;
    }

    /**
     * Sets savings field.
     *
     * @param int|null $value
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
     *
     * @param int|null $value
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
     *
     * @param int|null $value
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
     *
     * @param int|null $value
     */
    public function revenueInCents(?int $value): self
    {
        $this->instance->setRevenueInCents($value);
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
     * Initializes a new Coupon Usage object.
     */
    public function build(): CouponUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
