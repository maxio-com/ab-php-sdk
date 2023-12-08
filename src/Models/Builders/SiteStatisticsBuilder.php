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
     * Initializes a new site statistics Builder object.
     */
    public static function init(): self
    {
        return new self(new SiteStatistics());
    }

    /**
     * Sets total subscriptions field.
     */
    public function totalSubscriptions(?int $value): self
    {
        $this->instance->setTotalSubscriptions($value);
        return $this;
    }

    /**
     * Sets subscriptions today field.
     */
    public function subscriptionsToday(?int $value): self
    {
        $this->instance->setSubscriptionsToday($value);
        return $this;
    }

    /**
     * Sets total revenue field.
     */
    public function totalRevenue(?string $value): self
    {
        $this->instance->setTotalRevenue($value);
        return $this;
    }

    /**
     * Sets revenue today field.
     */
    public function revenueToday(?string $value): self
    {
        $this->instance->setRevenueToday($value);
        return $this;
    }

    /**
     * Sets revenue this month field.
     */
    public function revenueThisMonth(?string $value): self
    {
        $this->instance->setRevenueThisMonth($value);
        return $this;
    }

    /**
     * Sets revenue this year field.
     */
    public function revenueThisYear(?string $value): self
    {
        $this->instance->setRevenueThisYear($value);
        return $this;
    }

    /**
     * Sets total canceled subscriptions field.
     */
    public function totalCanceledSubscriptions(?int $value): self
    {
        $this->instance->setTotalCanceledSubscriptions($value);
        return $this;
    }

    /**
     * Sets total active subscriptions field.
     */
    public function totalActiveSubscriptions(?float $value): self
    {
        $this->instance->setTotalActiveSubscriptions($value);
        return $this;
    }

    /**
     * Sets total past due subscriptions field.
     */
    public function totalPastDueSubscriptions(?float $value): self
    {
        $this->instance->setTotalPastDueSubscriptions($value);
        return $this;
    }

    /**
     * Sets total unpaid subscriptions field.
     */
    public function totalUnpaidSubscriptions(?float $value): self
    {
        $this->instance->setTotalUnpaidSubscriptions($value);
        return $this;
    }

    /**
     * Sets total dunning subscriptions field.
     */
    public function totalDunningSubscriptions(?float $value): self
    {
        $this->instance->setTotalDunningSubscriptions($value);
        return $this;
    }

    /**
     * Initializes a new site statistics object.
     */
    public function build(): SiteStatistics
    {
        return CoreHelper::clone($this->instance);
    }
}
