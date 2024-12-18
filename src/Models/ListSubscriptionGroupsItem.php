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

class ListSubscriptionGroupsItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var int|null
     */
    private $scheme;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var int|null
     */
    private $paymentProfileId;

    /**
     * @var int[]|null
     */
    private $subscriptionIds;

    /**
     * @var int|null
     */
    private $primarySubscriptionId;

    /**
     * @var \DateTime|null
     */
    private $nextAssessmentAt;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var bool|null
     */
    private $cancelAtEndOfPeriod;

    /**
     * @var SubscriptionGroupBalances|null
     */
    private $accountBalances;

    /**
     * @var string|null
     */
    private $groupType;

    /**
     * Returns Uid.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Scheme.
     */
    public function getScheme(): ?int
    {
        return $this->scheme;
    }

    /**
     * Sets Scheme.
     *
     * @maps scheme
     */
    public function setScheme(?int $scheme): void
    {
        $this->scheme = $scheme;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Payment Profile Id.
     */
    public function getPaymentProfileId(): ?int
    {
        return $this->paymentProfileId;
    }

    /**
     * Sets Payment Profile Id.
     *
     * @maps payment_profile_id
     */
    public function setPaymentProfileId(?int $paymentProfileId): void
    {
        $this->paymentProfileId = $paymentProfileId;
    }

    /**
     * Returns Subscription Ids.
     *
     * @return int[]|null
     */
    public function getSubscriptionIds(): ?array
    {
        return $this->subscriptionIds;
    }

    /**
     * Sets Subscription Ids.
     *
     * @maps subscription_ids
     *
     * @param int[]|null $subscriptionIds
     */
    public function setSubscriptionIds(?array $subscriptionIds): void
    {
        $this->subscriptionIds = $subscriptionIds;
    }

    /**
     * Returns Primary Subscription Id.
     */
    public function getPrimarySubscriptionId(): ?int
    {
        return $this->primarySubscriptionId;
    }

    /**
     * Sets Primary Subscription Id.
     *
     * @maps primary_subscription_id
     */
    public function setPrimarySubscriptionId(?int $primarySubscriptionId): void
    {
        $this->primarySubscriptionId = $primarySubscriptionId;
    }

    /**
     * Returns Next Assessment At.
     */
    public function getNextAssessmentAt(): ?\DateTime
    {
        return $this->nextAssessmentAt;
    }

    /**
     * Sets Next Assessment At.
     *
     * @maps next_assessment_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNextAssessmentAt(?\DateTime $nextAssessmentAt): void
    {
        $this->nextAssessmentAt = $nextAssessmentAt;
    }

    /**
     * Returns State.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Cancel at End of Period.
     */
    public function getCancelAtEndOfPeriod(): ?bool
    {
        return $this->cancelAtEndOfPeriod;
    }

    /**
     * Sets Cancel at End of Period.
     *
     * @maps cancel_at_end_of_period
     */
    public function setCancelAtEndOfPeriod(?bool $cancelAtEndOfPeriod): void
    {
        $this->cancelAtEndOfPeriod = $cancelAtEndOfPeriod;
    }

    /**
     * Returns Account Balances.
     */
    public function getAccountBalances(): ?SubscriptionGroupBalances
    {
        return $this->accountBalances;
    }

    /**
     * Sets Account Balances.
     *
     * @maps account_balances
     */
    public function setAccountBalances(?SubscriptionGroupBalances $accountBalances): void
    {
        $this->accountBalances = $accountBalances;
    }

    /**
     * Returns Group Type.
     */
    public function getGroupType(): ?string
    {
        return $this->groupType;
    }

    /**
     * Sets Group Type.
     *
     * @maps group_type
     * @factory \AdvancedBillingLib\Models\GroupType::checkValue
     */
    public function setGroupType(?string $groupType): void
    {
        $this->groupType = $groupType;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        if (isset($this->uid)) {
            $json['uid']                     = $this->uid;
        }
        if (isset($this->scheme)) {
            $json['scheme']                  = $this->scheme;
        }
        if (isset($this->customerId)) {
            $json['customer_id']             = $this->customerId;
        }
        if (isset($this->paymentProfileId)) {
            $json['payment_profile_id']      = $this->paymentProfileId;
        }
        if (isset($this->subscriptionIds)) {
            $json['subscription_ids']        = $this->subscriptionIds;
        }
        if (isset($this->primarySubscriptionId)) {
            $json['primary_subscription_id'] = $this->primarySubscriptionId;
        }
        if (isset($this->nextAssessmentAt)) {
            $json['next_assessment_at']      = DateTimeHelper::toRfc3339DateTime($this->nextAssessmentAt);
        }
        if (isset($this->state)) {
            $json['state']                   = $this->state;
        }
        if (isset($this->cancelAtEndOfPeriod)) {
            $json['cancel_at_end_of_period'] = $this->cancelAtEndOfPeriod;
        }
        if (isset($this->accountBalances)) {
            $json['account_balances']        = $this->accountBalances;
        }
        if (isset($this->groupType)) {
            $json['group_type']              = GroupType::checkValue($this->groupType);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
