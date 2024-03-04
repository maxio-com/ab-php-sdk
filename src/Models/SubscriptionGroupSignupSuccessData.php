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

class SubscriptionGroupSignupSuccessData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $uid;

    /**
     * @var int
     */
    private $scheme;

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var int
     */
    private $paymentProfileId;

    /**
     * @var int[]
     */
    private $subscriptionIds;

    /**
     * @var int
     */
    private $primarySubscriptionId;

    /**
     * @var \DateTime
     */
    private $nextAssessmentAt;

    /**
     * @var string
     */
    private $state;

    /**
     * @var bool
     */
    private $cancelAtEndOfPeriod;

    /**
     * @param string $uid
     * @param int $scheme
     * @param int $customerId
     * @param int $paymentProfileId
     * @param int[] $subscriptionIds
     * @param int $primarySubscriptionId
     * @param \DateTime $nextAssessmentAt
     * @param string $state
     * @param bool $cancelAtEndOfPeriod
     */
    public function __construct(
        string $uid,
        int $scheme,
        int $customerId,
        int $paymentProfileId,
        array $subscriptionIds,
        int $primarySubscriptionId,
        \DateTime $nextAssessmentAt,
        string $state,
        bool $cancelAtEndOfPeriod
    ) {
        $this->uid = $uid;
        $this->scheme = $scheme;
        $this->customerId = $customerId;
        $this->paymentProfileId = $paymentProfileId;
        $this->subscriptionIds = $subscriptionIds;
        $this->primarySubscriptionId = $primarySubscriptionId;
        $this->nextAssessmentAt = $nextAssessmentAt;
        $this->state = $state;
        $this->cancelAtEndOfPeriod = $cancelAtEndOfPeriod;
    }

    /**
     * Returns Uid.
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @required
     * @maps uid
     */
    public function setUid(string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Scheme.
     */
    public function getScheme(): int
    {
        return $this->scheme;
    }

    /**
     * Sets Scheme.
     *
     * @required
     * @maps scheme
     */
    public function setScheme(int $scheme): void
    {
        $this->scheme = $scheme;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @required
     * @maps customer_id
     */
    public function setCustomerId(int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Payment Profile Id.
     */
    public function getPaymentProfileId(): int
    {
        return $this->paymentProfileId;
    }

    /**
     * Sets Payment Profile Id.
     *
     * @required
     * @maps payment_profile_id
     */
    public function setPaymentProfileId(int $paymentProfileId): void
    {
        $this->paymentProfileId = $paymentProfileId;
    }

    /**
     * Returns Subscription Ids.
     *
     * @return int[]
     */
    public function getSubscriptionIds(): array
    {
        return $this->subscriptionIds;
    }

    /**
     * Sets Subscription Ids.
     *
     * @required
     * @maps subscription_ids
     *
     * @param int[] $subscriptionIds
     */
    public function setSubscriptionIds(array $subscriptionIds): void
    {
        $this->subscriptionIds = $subscriptionIds;
    }

    /**
     * Returns Primary Subscription Id.
     */
    public function getPrimarySubscriptionId(): int
    {
        return $this->primarySubscriptionId;
    }

    /**
     * Sets Primary Subscription Id.
     *
     * @required
     * @maps primary_subscription_id
     */
    public function setPrimarySubscriptionId(int $primarySubscriptionId): void
    {
        $this->primarySubscriptionId = $primarySubscriptionId;
    }

    /**
     * Returns Next Assessment At.
     */
    public function getNextAssessmentAt(): \DateTime
    {
        return $this->nextAssessmentAt;
    }

    /**
     * Sets Next Assessment At.
     *
     * @required
     * @maps next_assessment_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNextAssessmentAt(\DateTime $nextAssessmentAt): void
    {
        $this->nextAssessmentAt = $nextAssessmentAt;
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
     * Returns Cancel at End of Period.
     */
    public function getCancelAtEndOfPeriod(): bool
    {
        return $this->cancelAtEndOfPeriod;
    }

    /**
     * Sets Cancel at End of Period.
     *
     * @required
     * @maps cancel_at_end_of_period
     */
    public function setCancelAtEndOfPeriod(bool $cancelAtEndOfPeriod): void
    {
        $this->cancelAtEndOfPeriod = $cancelAtEndOfPeriod;
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
        $json['uid']                     = $this->uid;
        $json['scheme']                  = $this->scheme;
        $json['customer_id']             = $this->customerId;
        $json['payment_profile_id']      = $this->paymentProfileId;
        $json['subscription_ids']        = $this->subscriptionIds;
        $json['primary_subscription_id'] = $this->primarySubscriptionId;
        $json['next_assessment_at']      = DateTimeHelper::toRfc3339DateTime($this->nextAssessmentAt);
        $json['state']                   = $this->state;
        $json['cancel_at_end_of_period'] = $this->cancelAtEndOfPeriod;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
