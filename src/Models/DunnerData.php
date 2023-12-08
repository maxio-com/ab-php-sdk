<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class DunnerData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $state;

    /**
     * @var int
     */
    private $subscriptionId;

    /**
     * @var int
     */
    private $revenueAtRiskInCents;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var int
     */
    private $attempts;

    /**
     * @var string
     */
    private $lastAttemptedAt;

    /**
     * @param string $state
     * @param int $subscriptionId
     * @param int $revenueAtRiskInCents
     * @param string $createdAt
     * @param int $attempts
     * @param string $lastAttemptedAt
     */
    public function __construct(
        string $state,
        int $subscriptionId,
        int $revenueAtRiskInCents,
        string $createdAt,
        int $attempts,
        string $lastAttemptedAt
    ) {
        $this->state = $state;
        $this->subscriptionId = $subscriptionId;
        $this->revenueAtRiskInCents = $revenueAtRiskInCents;
        $this->createdAt = $createdAt;
        $this->attempts = $attempts;
        $this->lastAttemptedAt = $lastAttemptedAt;
    }

    /**
     * Returns State.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Sets State.
     *
     * @required
     * @maps state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @required
     * @maps subscription_id
     */
    public function setSubscriptionId(int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Revenue at Risk in Cents.
     */
    public function getRevenueAtRiskInCents(): int
    {
        return $this->revenueAtRiskInCents;
    }

    /**
     * Sets Revenue at Risk in Cents.
     *
     * @required
     * @maps revenue_at_risk_in_cents
     */
    public function setRevenueAtRiskInCents(int $revenueAtRiskInCents): void
    {
        $this->revenueAtRiskInCents = $revenueAtRiskInCents;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Attempts.
     */
    public function getAttempts(): int
    {
        return $this->attempts;
    }

    /**
     * Sets Attempts.
     *
     * @required
     * @maps attempts
     */
    public function setAttempts(int $attempts): void
    {
        $this->attempts = $attempts;
    }

    /**
     * Returns Last Attempted At.
     */
    public function getLastAttemptedAt(): string
    {
        return $this->lastAttemptedAt;
    }

    /**
     * Sets Last Attempted At.
     *
     * @required
     * @maps last_attempted_at
     */
    public function setLastAttemptedAt(string $lastAttemptedAt): void
    {
        $this->lastAttemptedAt = $lastAttemptedAt;
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
        $json['state']                    = $this->state;
        $json['subscription_id']          = $this->subscriptionId;
        $json['revenue_at_risk_in_cents'] = $this->revenueAtRiskInCents;
        $json['created_at']               = $this->createdAt;
        $json['attempts']                 = $this->attempts;
        $json['last_attempted_at']        = $this->lastAttemptedAt;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
