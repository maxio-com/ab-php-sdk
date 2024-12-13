<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SiteStatistics;
use Core\Utils\CoreHelper;

/**
 * Builder for model SiteStatistics
 *
 * @see SiteStatistics
 */
class SiteStatisticsBuilder
{
    /**
     * @var SiteStatistics
     */
    private $instance;

    private function __construct(SiteStatistics $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Site Statistics Builder object.
     */
    public static function init(): self
    {
        return new self(new SiteStatistics());
    }

    /**
     * Sets total subscriptions field.
     *
     * @param int|null $value
     */
    public function totalSubscriptions(?int $value): self
    {
        $this->instance->setTotalSubscriptions($value);
        return $this;
    }

    /**
     * Sets subscriptions today field.
     *
     * @param int|null $value
     */
    public function subscriptionsToday(?int $value): self
    {
        $this->instance->setSubscriptionsToday($value);
        return $this;
    }

    /**
     * Sets total revenue field.
     *
     * @param string|null $value
     */
    public function totalRevenue(?string $value): self
    {
        $this->instance->setTotalRevenue($value);
        return $this;
    }

    /**
     * Sets revenue today field.
     *
     * @param string|null $value
     */
    public function revenueToday(?string $value): self
    {
        $this->instance->setRevenueToday($value);
        return $this;
    }

    /**
     * Sets revenue this month field.
     *
     * @param string|null $value
     */
    public function revenueThisMonth(?string $value): self
    {
        $this->instance->setRevenueThisMonth($value);
        return $this;
    }

    /**
     * Sets revenue this year field.
     *
     * @param string|null $value
     */
    public function revenueThisYear(?string $value): self
    {
        $this->instance->setRevenueThisYear($value);
        return $this;
    }

    /**
     * Sets total canceled subscriptions field.
     *
     * @param int|null $value
     */
    public function totalCanceledSubscriptions(?int $value): self
    {
        $this->instance->setTotalCanceledSubscriptions($value);
        return $this;
    }

    /**
     * Sets total active subscriptions field.
     *
     * @param int|null $value
     */
    public function totalActiveSubscriptions(?int $value): self
    {
        $this->instance->setTotalActiveSubscriptions($value);
        return $this;
    }

    /**
     * Sets total past due subscriptions field.
     *
     * @param int|null $value
     */
    public function totalPastDueSubscriptions(?int $value): self
    {
        $this->instance->setTotalPastDueSubscriptions($value);
        return $this;
    }

    /**
     * Sets total unpaid subscriptions field.
     *
     * @param int|null $value
     */
    public function totalUnpaidSubscriptions(?int $value): self
    {
        $this->instance->setTotalUnpaidSubscriptions($value);
        return $this;
    }

    /**
     * Sets total dunning subscriptions field.
     *
     * @param int|null $value
     */
    public function totalDunningSubscriptions(?int $value): self
    {
        $this->instance->setTotalDunningSubscriptions($value);
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
     * Initializes a new Site Statistics object.
     */
    public function build(): SiteStatistics
    {
        return CoreHelper::clone($this->instance);
    }
}
