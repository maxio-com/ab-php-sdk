<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class FullSubscriptionGroupResponse implements \JsonSerializable
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
     * @var int|null
     */
    private $currentBillingAmountInCents;

    /**
     * @var SubscriptionGroupCustomer|null
     */
    private $customer;

    /**
     * @var SubscriptionGroupBalances|null
     */
    private $accountBalances;

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
     * The state of a subscription.
     * * **Live States**
     * * `active` - A normal, active subscription. It is not in a trial and is paid and up to date.
     * * `assessing` - An internal (transient) state that indicates a subscription is in the middle of
     * periodic assessment. Do not base any access decisions in your app on this state, as it may not
     * always be exposed.
     * * `pending` - An internal (transient) state that indicates a subscription is in the creation
     * process. Do not base any access decisions in your app on this state, as it may not always be exposed.
     * * `trialing` - A subscription in trialing state has a valid trial subscription. This type of
     * subscription may transition to active once payment is received when the trial has ended. Otherwise,
     * it may go to a Problem or End of Life state.
     * * `paused` - An internal state that indicates that your account with Advanced Billing is in
     * arrears.
     * * **Problem States**
     * * `past_due` - Indicates that the most recent payment has failed, and payment is past due for
     * this subscription. If you have enabled our automated dunning, this subscription will be in the
     * dunning process (additional status and callbacks from the dunning process will be available in the
     * future). If you are handling dunning and payment updates yourself, you will want to use this state
     * to initiate a payment update from your customers.
     * * `soft_failure` - Indicates that normal assessment/processing of the subscription has failed
     * for a reason that cannot be fixed by the Customer. For example, a Soft Fail may result from a
     * timeout at the gateway or incorrect credentials on your part. The subscriptions should be retried
     * automatically. An interface is being built for you to review problems resulting from these events to
     * take manual action when needed.
     * * `unpaid` - Indicates an unpaid subscription. A subscription is marked unpaid if the retry
     * period expires and you have configured your [Dunning](https://maxio.zendesk.com/hc/en-
     * us/articles/24287076583565-Dunning-Overview) settings to have a Final Action of `mark the
     * subscription unpaid`.
     * * **End of Life States**
     * * `canceled` - Indicates a canceled subscription. This may happen at your request (via the API
     * or the web interface) or due to the expiration of the [Dunning](https://maxio.zendesk.com/hc/en-
     * us/articles/24287076583565-Dunning-Overview) process without payment. See the [Reactivation](https:
     * //maxio.zendesk.com/hc/en-us/articles/24252109503629-Reactivating-and-Resuming) documentation for
     * info on how to restart a canceled subscription.
     * While a subscription is canceled, its period will not advance, it will not accrue any new
     * charges, and Advanced Billing will not attempt to collect the overdue balance.
     * * `expired` - Indicates a subscription that has expired due to running its normal life cycle.
     * Some products may be configured to have an expiration period. An expired subscription then is one
     * that stayed active until it fulfilled its full period.
     * * `failed_to_create` - Indicates that signup has failed. (You may see this state in a
     * signup_failure webhook.)
     * * `on_hold` - Indicates that a subscription’s billing has been temporarily stopped. While it is
     * expected that the subscription will resume and return to active status, this is still treated as an
     * “End of Life” state because the customer is not paying for services during this time.
     * * `suspended` - Indicates that a prepaid subscription has used up all their prepayment balance.
     * If a prepayment is applied, it will return to an active state.
     * * `trial_ended` - A subscription in a trial_ended state is a subscription that completed a no-
     * obligation trial and did not have a card on file at the expiration of the trial period. See [Product
     * Pricing – No Obligation Trials](https://maxio.zendesk.com/hc/en-us/articles/24261076617869-Product-
     * Editing) for more details.
     *
     * See [Subscription States](https://maxio.zendesk.com/hc/en-us/articles/24252119027853-Subscription-
     * States) for more info about subscription states and state transitions.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * The state of a subscription.
     * * **Live States**
     * * `active` - A normal, active subscription. It is not in a trial and is paid and up to date.
     * * `assessing` - An internal (transient) state that indicates a subscription is in the middle of
     * periodic assessment. Do not base any access decisions in your app on this state, as it may not
     * always be exposed.
     * * `pending` - An internal (transient) state that indicates a subscription is in the creation
     * process. Do not base any access decisions in your app on this state, as it may not always be exposed.
     * * `trialing` - A subscription in trialing state has a valid trial subscription. This type of
     * subscription may transition to active once payment is received when the trial has ended. Otherwise,
     * it may go to a Problem or End of Life state.
     * * `paused` - An internal state that indicates that your account with Advanced Billing is in
     * arrears.
     * * **Problem States**
     * * `past_due` - Indicates that the most recent payment has failed, and payment is past due for
     * this subscription. If you have enabled our automated dunning, this subscription will be in the
     * dunning process (additional status and callbacks from the dunning process will be available in the
     * future). If you are handling dunning and payment updates yourself, you will want to use this state
     * to initiate a payment update from your customers.
     * * `soft_failure` - Indicates that normal assessment/processing of the subscription has failed
     * for a reason that cannot be fixed by the Customer. For example, a Soft Fail may result from a
     * timeout at the gateway or incorrect credentials on your part. The subscriptions should be retried
     * automatically. An interface is being built for you to review problems resulting from these events to
     * take manual action when needed.
     * * `unpaid` - Indicates an unpaid subscription. A subscription is marked unpaid if the retry
     * period expires and you have configured your [Dunning](https://maxio.zendesk.com/hc/en-
     * us/articles/24287076583565-Dunning-Overview) settings to have a Final Action of `mark the
     * subscription unpaid`.
     * * **End of Life States**
     * * `canceled` - Indicates a canceled subscription. This may happen at your request (via the API
     * or the web interface) or due to the expiration of the [Dunning](https://maxio.zendesk.com/hc/en-
     * us/articles/24287076583565-Dunning-Overview) process without payment. See the [Reactivation](https:
     * //maxio.zendesk.com/hc/en-us/articles/24252109503629-Reactivating-and-Resuming) documentation for
     * info on how to restart a canceled subscription.
     * While a subscription is canceled, its period will not advance, it will not accrue any new
     * charges, and Advanced Billing will not attempt to collect the overdue balance.
     * * `expired` - Indicates a subscription that has expired due to running its normal life cycle.
     * Some products may be configured to have an expiration period. An expired subscription then is one
     * that stayed active until it fulfilled its full period.
     * * `failed_to_create` - Indicates that signup has failed. (You may see this state in a
     * signup_failure webhook.)
     * * `on_hold` - Indicates that a subscription’s billing has been temporarily stopped. While it is
     * expected that the subscription will resume and return to active status, this is still treated as an
     * “End of Life” state because the customer is not paying for services during this time.
     * * `suspended` - Indicates that a prepaid subscription has used up all their prepayment balance.
     * If a prepayment is applied, it will return to an active state.
     * * `trial_ended` - A subscription in a trial_ended state is a subscription that completed a no-
     * obligation trial and did not have a card on file at the expiration of the trial period. See [Product
     * Pricing – No Obligation Trials](https://maxio.zendesk.com/hc/en-us/articles/24261076617869-Product-
     * Editing) for more details.
     *
     * See [Subscription States](https://maxio.zendesk.com/hc/en-us/articles/24252119027853-Subscription-
     * States) for more info about subscription states and state transitions.
     *
     * @maps state
     * @factory \AdvancedBillingLib\Models\SubscriptionState::checkValue
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
     * Returns Current Billing Amount in Cents.
     */
    public function getCurrentBillingAmountInCents(): ?int
    {
        return $this->currentBillingAmountInCents;
    }

    /**
     * Sets Current Billing Amount in Cents.
     *
     * @maps current_billing_amount_in_cents
     */
    public function setCurrentBillingAmountInCents(?int $currentBillingAmountInCents): void
    {
        $this->currentBillingAmountInCents = $currentBillingAmountInCents;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?SubscriptionGroupCustomer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?SubscriptionGroupCustomer $customer): void
    {
        $this->customer = $customer;
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
     * Converts the FullSubscriptionGroupResponse object to a human-readable string representation.
     *
     * @return string The string representation of the FullSubscriptionGroupResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FullSubscriptionGroupResponse',
            [
                'uid' => $this->uid,
                'scheme' => $this->scheme,
                'customerId' => $this->customerId,
                'paymentProfileId' => $this->paymentProfileId,
                'subscriptionIds' => $this->subscriptionIds,
                'primarySubscriptionId' => $this->primarySubscriptionId,
                'nextAssessmentAt' => $this->nextAssessmentAt,
                'state' => $this->state,
                'cancelAtEndOfPeriod' => $this->cancelAtEndOfPeriod,
                'currentBillingAmountInCents' => $this->currentBillingAmountInCents,
                'customer' => $this->customer,
                'accountBalances' => $this->accountBalances,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
            $json['uid']                             = $this->uid;
        }
        if (isset($this->scheme)) {
            $json['scheme']                          = $this->scheme;
        }
        if (isset($this->customerId)) {
            $json['customer_id']                     = $this->customerId;
        }
        if (isset($this->paymentProfileId)) {
            $json['payment_profile_id']              = $this->paymentProfileId;
        }
        if (isset($this->subscriptionIds)) {
            $json['subscription_ids']                = $this->subscriptionIds;
        }
        if (isset($this->primarySubscriptionId)) {
            $json['primary_subscription_id']         = $this->primarySubscriptionId;
        }
        if (isset($this->nextAssessmentAt)) {
            $json['next_assessment_at']              = DateTimeHelper::toRfc3339DateTime($this->nextAssessmentAt);
        }
        if (isset($this->state)) {
            $json['state']                           = SubscriptionState::checkValue($this->state);
        }
        if (isset($this->cancelAtEndOfPeriod)) {
            $json['cancel_at_end_of_period']         = $this->cancelAtEndOfPeriod;
        }
        if (isset($this->currentBillingAmountInCents)) {
            $json['current_billing_amount_in_cents'] = $this->currentBillingAmountInCents;
        }
        if (isset($this->customer)) {
            $json['customer']                        = $this->customer;
        }
        if (isset($this->accountBalances)) {
            $json['account_balances']                = $this->accountBalances;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
