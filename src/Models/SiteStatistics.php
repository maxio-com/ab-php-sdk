<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SiteStatistics implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $totalSubscriptions;

    /**
     * @var int|null
     */
    private $subscriptionsToday;

    /**
     * @var string|null
     */
    private $totalRevenue;

    /**
     * @var string|null
     */
    private $revenueToday;

    /**
     * @var string|null
     */
    private $revenueThisMonth;

    /**
     * @var string|null
     */
    private $revenueThisYear;

    /**
     * @var int|null
     */
    private $totalCanceledSubscriptions;

    /**
     * @var float|null
     */
    private $totalActiveSubscriptions;

    /**
     * @var float|null
     */
    private $totalPastDueSubscriptions;

    /**
     * @var float|null
     */
    private $totalUnpaidSubscriptions;

    /**
     * @var float|null
     */
    private $totalDunningSubscriptions;

    /**
     * Returns Total Subscriptions.
     */
    public function getTotalSubscriptions(): ?int
    {
        return $this->totalSubscriptions;
    }

    /**
     * Sets Total Subscriptions.
     *
     * @maps total_subscriptions
     */
    public function setTotalSubscriptions(?int $totalSubscriptions): void
    {
        $this->totalSubscriptions = $totalSubscriptions;
    }

    /**
     * Returns Subscriptions Today.
     */
    public function getSubscriptionsToday(): ?int
    {
        return $this->subscriptionsToday;
    }

    /**
     * Sets Subscriptions Today.
     *
     * @maps subscriptions_today
     */
    public function setSubscriptionsToday(?int $subscriptionsToday): void
    {
        $this->subscriptionsToday = $subscriptionsToday;
    }

    /**
     * Returns Total Revenue.
     */
    public function getTotalRevenue(): ?string
    {
        return $this->totalRevenue;
    }

    /**
     * Sets Total Revenue.
     *
     * @maps total_revenue
     */
    public function setTotalRevenue(?string $totalRevenue): void
    {
        $this->totalRevenue = $totalRevenue;
    }

    /**
     * Returns Revenue Today.
     */
    public function getRevenueToday(): ?string
    {
        return $this->revenueToday;
    }

    /**
     * Sets Revenue Today.
     *
     * @maps revenue_today
     */
    public function setRevenueToday(?string $revenueToday): void
    {
        $this->revenueToday = $revenueToday;
    }

    /**
     * Returns Revenue This Month.
     */
    public function getRevenueThisMonth(): ?string
    {
        return $this->revenueThisMonth;
    }

    /**
     * Sets Revenue This Month.
     *
     * @maps revenue_this_month
     */
    public function setRevenueThisMonth(?string $revenueThisMonth): void
    {
        $this->revenueThisMonth = $revenueThisMonth;
    }

    /**
     * Returns Revenue This Year.
     */
    public function getRevenueThisYear(): ?string
    {
        return $this->revenueThisYear;
    }

    /**
     * Sets Revenue This Year.
     *
     * @maps revenue_this_year
     */
    public function setRevenueThisYear(?string $revenueThisYear): void
    {
        $this->revenueThisYear = $revenueThisYear;
    }

    /**
     * Returns Total Canceled Subscriptions.
     */
    public function getTotalCanceledSubscriptions(): ?int
    {
        return $this->totalCanceledSubscriptions;
    }

    /**
     * Sets Total Canceled Subscriptions.
     *
     * @maps total_canceled_subscriptions
     */
    public function setTotalCanceledSubscriptions(?int $totalCanceledSubscriptions): void
    {
        $this->totalCanceledSubscriptions = $totalCanceledSubscriptions;
    }

    /**
     * Returns Total Active Subscriptions.
     */
    public function getTotalActiveSubscriptions(): ?float
    {
        return $this->totalActiveSubscriptions;
    }

    /**
     * Sets Total Active Subscriptions.
     *
     * @maps total_active_subscriptions
     */
    public function setTotalActiveSubscriptions(?float $totalActiveSubscriptions): void
    {
        $this->totalActiveSubscriptions = $totalActiveSubscriptions;
    }

    /**
     * Returns Total Past Due Subscriptions.
     */
    public function getTotalPastDueSubscriptions(): ?float
    {
        return $this->totalPastDueSubscriptions;
    }

    /**
     * Sets Total Past Due Subscriptions.
     *
     * @maps total_past_due_subscriptions
     */
    public function setTotalPastDueSubscriptions(?float $totalPastDueSubscriptions): void
    {
        $this->totalPastDueSubscriptions = $totalPastDueSubscriptions;
    }

    /**
     * Returns Total Unpaid Subscriptions.
     */
    public function getTotalUnpaidSubscriptions(): ?float
    {
        return $this->totalUnpaidSubscriptions;
    }

    /**
     * Sets Total Unpaid Subscriptions.
     *
     * @maps total_unpaid_subscriptions
     */
    public function setTotalUnpaidSubscriptions(?float $totalUnpaidSubscriptions): void
    {
        $this->totalUnpaidSubscriptions = $totalUnpaidSubscriptions;
    }

    /**
     * Returns Total Dunning Subscriptions.
     */
    public function getTotalDunningSubscriptions(): ?float
    {
        return $this->totalDunningSubscriptions;
    }

    /**
     * Sets Total Dunning Subscriptions.
     *
     * @maps total_dunning_subscriptions
     */
    public function setTotalDunningSubscriptions(?float $totalDunningSubscriptions): void
    {
        $this->totalDunningSubscriptions = $totalDunningSubscriptions;
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
        if (isset($this->totalSubscriptions)) {
            $json['total_subscriptions']          = $this->totalSubscriptions;
        }
        if (isset($this->subscriptionsToday)) {
            $json['subscriptions_today']          = $this->subscriptionsToday;
        }
        if (isset($this->totalRevenue)) {
            $json['total_revenue']                = $this->totalRevenue;
        }
        if (isset($this->revenueToday)) {
            $json['revenue_today']                = $this->revenueToday;
        }
        if (isset($this->revenueThisMonth)) {
            $json['revenue_this_month']           = $this->revenueThisMonth;
        }
        if (isset($this->revenueThisYear)) {
            $json['revenue_this_year']            = $this->revenueThisYear;
        }
        if (isset($this->totalCanceledSubscriptions)) {
            $json['total_canceled_subscriptions'] = $this->totalCanceledSubscriptions;
        }
        if (isset($this->totalActiveSubscriptions)) {
            $json['total_active_subscriptions']   = $this->totalActiveSubscriptions;
        }
        if (isset($this->totalPastDueSubscriptions)) {
            $json['total_past_due_subscriptions'] = $this->totalPastDueSubscriptions;
        }
        if (isset($this->totalUnpaidSubscriptions)) {
            $json['total_unpaid_subscriptions']   = $this->totalUnpaidSubscriptions;
        }
        if (isset($this->totalDunningSubscriptions)) {
            $json['total_dunning_subscriptions']  = $this->totalDunningSubscriptions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
