<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
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
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var int
     */
    private $attempts;

    /**
     * @var \DateTime
     */
    private $lastAttemptedAt;

    /**
     * @param string $state
     * @param int $subscriptionId
     * @param int $revenueAtRiskInCents
     * @param \DateTime $createdAt
     * @param int $attempts
     * @param \DateTime $lastAttemptedAt
     */
    public function __construct(
        string $state,
        int $subscriptionId,
        int $revenueAtRiskInCents,
        \DateTime $createdAt,
        int $attempts,
        \DateTime $lastAttemptedAt
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
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(\DateTime $createdAt): void
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
    public function getLastAttemptedAt(): \DateTime
    {
        return $this->lastAttemptedAt;
    }

    /**
     * Sets Last Attempted At.
     *
     * @required
     * @maps last_attempted_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLastAttemptedAt(\DateTime $lastAttemptedAt): void
    {
        $this->lastAttemptedAt = $lastAttemptedAt;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        $json['created_at']               = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['attempts']                 = $this->attempts;
        $json['last_attempted_at']        = DateTimeHelper::toRfc3339DateTime($this->lastAttemptedAt);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
