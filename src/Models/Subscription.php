<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class Subscription implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var int|null
     */
    private $balanceInCents;

    /**
     * @var int|null
     */
    private $totalRevenueInCents;

    /**
     * @var int|null
     */
    private $productPriceInCents;

    /**
     * @var int|null
     */
    private $productVersionNumber;

    /**
     * @var string|null
     */
    private $currentPeriodEndsAt;

    /**
     * @var string|null
     */
    private $nextAssessmentAt;

    /**
     * @var array
     */
    private $trialStartedAt = [];

    /**
     * @var array
     */
    private $trialEndedAt = [];

    /**
     * @var string|null
     */
    private $activatedAt;

    /**
     * @var array
     */
    private $expiresAt = [];

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var array
     */
    private $cancellationMessage = [];

    /**
     * @var array
     */
    private $cancellationMethod = [];

    /**
     * @var array
     */
    private $cancelAtEndOfPeriod = [];

    /**
     * @var array
     */
    private $canceledAt = [];

    /**
     * @var string|null
     */
    private $currentPeriodStartedAt;

    /**
     * @var string|null
     */
    private $previousState;

    /**
     * @var int|null
     */
    private $signupPaymentId;

    /**
     * @var string|null
     */
    private $signupRevenue;

    /**
     * @var array
     */
    private $delayedCancelAt = [];

    /**
     * @var array
     */
    private $couponCode = [];

    /**
     * @var array
     */
    private $snapDay = [];

    /**
     * @var string|null
     */
    private $paymentCollectionMethod = PaymentCollectionMethod::AUTOMATIC;

    /**
     * @var Customer|null
     */
    private $customer;

    /**
     * @var Product|null
     */
    private $product;

    /**
     * @var PaymentProfile|null
     */
    private $creditCard;

    /**
     * @var array
     */
    private $group = [];

    /**
     * @var SubscriptionBankAccount|null
     */
    private $bankAccount;

    /**
     * @var array
     */
    private $paymentType = [];

    /**
     * @var array
     */
    private $referralCode = [];

    /**
     * @var array
     */
    private $nextProductId = [];

    /**
     * @var array
     */
    private $nextProductHandle = [];

    /**
     * @var array
     */
    private $couponUseCount = [];

    /**
     * @var array
     */
    private $couponUsesAllowed = [];

    /**
     * @var array
     */
    private $reasonCode = [];

    /**
     * @var array
     */
    private $automaticallyResumeAt = [];

    /**
     * @var string[]|null
     */
    private $couponCodes;

    /**
     * @var array
     */
    private $offerId = [];

    /**
     * @var array
     */
    private $payerId = [];

    /**
     * @var int|null
     */
    private $currentBillingAmountInCents;

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var string|null
     */
    private $productPricePointType;

    /**
     * @var array
     */
    private $nextProductPricePointId = [];

    /**
     * @var array
     */
    private $netTerms = [];

    /**
     * @var array
     */
    private $storedCredentialTransactionId = [];

    /**
     * @var array
     */
    private $reference = [];

    /**
     * @var array
     */
    private $onHoldAt = [];

    /**
     * @var bool|null
     */
    private $prepaidDunning;

    /**
     * @var SubscriptionIncludedCoupon[]|null
     */
    private $coupons;

    /**
     * @var bool|null
     */
    private $dunningCommunicationDelayEnabled = false;

    /**
     * @var array
     */
    private $dunningCommunicationDelayTimeZone = [];

    /**
     * @var array
     */
    private $receivesInvoiceEmails = [];

    /**
     * @var array
     */
    private $locale = [];

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var array
     */
    private $scheduledCancellationAt = [];

    /**
     * @var int|null
     */
    private $creditBalanceInCents;

    /**
     * @var int|null
     */
    private $prepaymentBalanceInCents;

    /**
     * @var PrepaidConfiguration|null
     */
    private $prepaidConfiguration;

    /**
     * @var string|null
     */
    private $selfServicePageToken;

    /**
     * Returns Id.
     * The subscription unique id within Chargify.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The subscription unique id within Chargify.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
     * period expires and you have configured your [Dunning](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5405505141005) settings to have a Final Action of `mark the subscription unpaid`.
     * * **End of Life States**
     * * `canceled` - Indicates a canceled subscription. This may happen at your request (via the API
     * or the web interface) or due to the expiration of the [Dunning](https://maxio-chargify.zendesk.
     * com/hc/en-us/articles/5405505141005) process without payment. See the [Reactivation](https://maxio-
     * chargify.zendesk.com/hc/en-us/articles/5404559291021) documentation for info on how to restart a
     * canceled subscription.
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
     * Pricing – No Obligation Trials](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405246782221)
     * for more details.
     *
     * See [Subscription States](https://maxio-chargify.zendesk.com/hc/en-us/articles/5404222005773) for
     * more info about subscription states and state transitions.
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
     * period expires and you have configured your [Dunning](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5405505141005) settings to have a Final Action of `mark the subscription unpaid`.
     * * **End of Life States**
     * * `canceled` - Indicates a canceled subscription. This may happen at your request (via the API
     * or the web interface) or due to the expiration of the [Dunning](https://maxio-chargify.zendesk.
     * com/hc/en-us/articles/5405505141005) process without payment. See the [Reactivation](https://maxio-
     * chargify.zendesk.com/hc/en-us/articles/5404559291021) documentation for info on how to restart a
     * canceled subscription.
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
     * Pricing – No Obligation Trials](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405246782221)
     * for more details.
     *
     * See [Subscription States](https://maxio-chargify.zendesk.com/hc/en-us/articles/5404222005773) for
     * more info about subscription states and state transitions.
     *
     * @maps state
     * @factory \AdvancedBillingLib\Models\SubscriptionState::checkValue
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Balance in Cents.
     * Gives the current outstanding subscription balance in the number of cents.
     */
    public function getBalanceInCents(): ?int
    {
        return $this->balanceInCents;
    }

    /**
     * Sets Balance in Cents.
     * Gives the current outstanding subscription balance in the number of cents.
     *
     * @maps balance_in_cents
     */
    public function setBalanceInCents(?int $balanceInCents): void
    {
        $this->balanceInCents = $balanceInCents;
    }

    /**
     * Returns Total Revenue in Cents.
     * Gives the total revenue from the subscription in the number of cents.
     */
    public function getTotalRevenueInCents(): ?int
    {
        return $this->totalRevenueInCents;
    }

    /**
     * Sets Total Revenue in Cents.
     * Gives the total revenue from the subscription in the number of cents.
     *
     * @maps total_revenue_in_cents
     */
    public function setTotalRevenueInCents(?int $totalRevenueInCents): void
    {
        $this->totalRevenueInCents = $totalRevenueInCents;
    }

    /**
     * Returns Product Price in Cents.
     * (Added Nov 5 2013) The recurring amount of the product (and version),currently subscribed. NOTE:
     * this may differ from the current price of,the product, if you’ve changed the price of the product
     * but haven’t,moved this subscription to a newer version.
     */
    public function getProductPriceInCents(): ?int
    {
        return $this->productPriceInCents;
    }

    /**
     * Sets Product Price in Cents.
     * (Added Nov 5 2013) The recurring amount of the product (and version),currently subscribed. NOTE:
     * this may differ from the current price of,the product, if you’ve changed the price of the product
     * but haven’t,moved this subscription to a newer version.
     *
     * @maps product_price_in_cents
     */
    public function setProductPriceInCents(?int $productPriceInCents): void
    {
        $this->productPriceInCents = $productPriceInCents;
    }

    /**
     * Returns Product Version Number.
     * The version of the product for the subscription. Note that this is a deprecated field kept for
     * backwards-compatibility.
     */
    public function getProductVersionNumber(): ?int
    {
        return $this->productVersionNumber;
    }

    /**
     * Sets Product Version Number.
     * The version of the product for the subscription. Note that this is a deprecated field kept for
     * backwards-compatibility.
     *
     * @maps product_version_number
     */
    public function setProductVersionNumber(?int $productVersionNumber): void
    {
        $this->productVersionNumber = $productVersionNumber;
    }

    /**
     * Returns Current Period Ends At.
     * Timestamp relating to the end of the current (recurring) period (i.e.,when the next regularly
     * scheduled attempted charge will occur)
     */
    public function getCurrentPeriodEndsAt(): ?string
    {
        return $this->currentPeriodEndsAt;
    }

    /**
     * Sets Current Period Ends At.
     * Timestamp relating to the end of the current (recurring) period (i.e.,when the next regularly
     * scheduled attempted charge will occur)
     *
     * @maps current_period_ends_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setCurrentPeriodEndsAt(?string $currentPeriodEndsAt): void
    {
        $this->currentPeriodEndsAt = $currentPeriodEndsAt;
    }

    /**
     * Returns Next Assessment At.
     * Timestamp that indicates when capture of payment will be tried or,retried. This value will usually
     * track the current_period_ends_at, but,will diverge if a renewal payment fails and must be retried.
     * In that,case, the current_period_ends_at will advance to the end of the next,period (time doesn’t
     * stop because a payment was missed) but the,next_assessment_at will be scheduled for the auto-retry
     * time (i.e. 24,hours in the future, in some cases)
     */
    public function getNextAssessmentAt(): ?string
    {
        return $this->nextAssessmentAt;
    }

    /**
     * Sets Next Assessment At.
     * Timestamp that indicates when capture of payment will be tried or,retried. This value will usually
     * track the current_period_ends_at, but,will diverge if a renewal payment fails and must be retried.
     * In that,case, the current_period_ends_at will advance to the end of the next,period (time doesn’t
     * stop because a payment was missed) but the,next_assessment_at will be scheduled for the auto-retry
     * time (i.e. 24,hours in the future, in some cases)
     *
     * @maps next_assessment_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setNextAssessmentAt(?string $nextAssessmentAt): void
    {
        $this->nextAssessmentAt = $nextAssessmentAt;
    }

    /**
     * Returns Trial Started At.
     * Timestamp for when the trial period (if any) began
     */
    public function getTrialStartedAt(): ?string
    {
        if (count($this->trialStartedAt) == 0) {
            return null;
        }
        return $this->trialStartedAt['value'];
    }

    /**
     * Sets Trial Started At.
     * Timestamp for when the trial period (if any) began
     *
     * @maps trial_started_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setTrialStartedAt(?string $trialStartedAt): void
    {
        $this->trialStartedAt['value'] = $trialStartedAt;
    }

    /**
     * Unsets Trial Started At.
     * Timestamp for when the trial period (if any) began
     */
    public function unsetTrialStartedAt(): void
    {
        $this->trialStartedAt = [];
    }

    /**
     * Returns Trial Ended At.
     * Timestamp for when the trial period (if any) ended
     */
    public function getTrialEndedAt(): ?string
    {
        if (count($this->trialEndedAt) == 0) {
            return null;
        }
        return $this->trialEndedAt['value'];
    }

    /**
     * Sets Trial Ended At.
     * Timestamp for when the trial period (if any) ended
     *
     * @maps trial_ended_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setTrialEndedAt(?string $trialEndedAt): void
    {
        $this->trialEndedAt['value'] = $trialEndedAt;
    }

    /**
     * Unsets Trial Ended At.
     * Timestamp for when the trial period (if any) ended
     */
    public function unsetTrialEndedAt(): void
    {
        $this->trialEndedAt = [];
    }

    /**
     * Returns Activated At.
     * Timestamp for when the subscription began (i.e. when it came out of trial, or when it began in the
     * case of no trial)
     */
    public function getActivatedAt(): ?string
    {
        return $this->activatedAt;
    }

    /**
     * Sets Activated At.
     * Timestamp for when the subscription began (i.e. when it came out of trial, or when it began in the
     * case of no trial)
     *
     * @maps activated_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setActivatedAt(?string $activatedAt): void
    {
        $this->activatedAt = $activatedAt;
    }

    /**
     * Returns Expires At.
     * Timestamp giving the expiration date of this subscription (if any)
     */
    public function getExpiresAt(): ?string
    {
        if (count($this->expiresAt) == 0) {
            return null;
        }
        return $this->expiresAt['value'];
    }

    /**
     * Sets Expires At.
     * Timestamp giving the expiration date of this subscription (if any)
     *
     * @maps expires_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setExpiresAt(?string $expiresAt): void
    {
        $this->expiresAt['value'] = $expiresAt;
    }

    /**
     * Unsets Expires At.
     * Timestamp giving the expiration date of this subscription (if any)
     */
    public function unsetExpiresAt(): void
    {
        $this->expiresAt = [];
    }

    /**
     * Returns Created At.
     * The creation date for this subscription
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The creation date for this subscription
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * The date of last update for this subscription
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * The date of last update for this subscription
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Cancellation Message.
     * Seller-provided reason for, or note about, the cancellation.
     */
    public function getCancellationMessage(): ?string
    {
        if (count($this->cancellationMessage) == 0) {
            return null;
        }
        return $this->cancellationMessage['value'];
    }

    /**
     * Sets Cancellation Message.
     * Seller-provided reason for, or note about, the cancellation.
     *
     * @maps cancellation_message
     */
    public function setCancellationMessage(?string $cancellationMessage): void
    {
        $this->cancellationMessage['value'] = $cancellationMessage;
    }

    /**
     * Unsets Cancellation Message.
     * Seller-provided reason for, or note about, the cancellation.
     */
    public function unsetCancellationMessage(): void
    {
        $this->cancellationMessage = [];
    }

    /**
     * Returns Cancellation Method.
     * The process used to cancel the subscription, if the subscription has been canceled. It is nil if the
     * subscription's state is not canceled.
     */
    public function getCancellationMethod(): ?string
    {
        if (count($this->cancellationMethod) == 0) {
            return null;
        }
        return $this->cancellationMethod['value'];
    }

    /**
     * Sets Cancellation Method.
     * The process used to cancel the subscription, if the subscription has been canceled. It is nil if the
     * subscription's state is not canceled.
     *
     * @maps cancellation_method
     * @factory \AdvancedBillingLib\Models\CancellationMethod::checkValue
     */
    public function setCancellationMethod(?string $cancellationMethod): void
    {
        $this->cancellationMethod['value'] = $cancellationMethod;
    }

    /**
     * Unsets Cancellation Method.
     * The process used to cancel the subscription, if the subscription has been canceled. It is nil if the
     * subscription's state is not canceled.
     */
    public function unsetCancellationMethod(): void
    {
        $this->cancellationMethod = [];
    }

    /**
     * Returns Cancel at End of Period.
     * Whether or not the subscription will (or has) canceled at the end of the period.
     */
    public function getCancelAtEndOfPeriod(): ?bool
    {
        if (count($this->cancelAtEndOfPeriod) == 0) {
            return null;
        }
        return $this->cancelAtEndOfPeriod['value'];
    }

    /**
     * Sets Cancel at End of Period.
     * Whether or not the subscription will (or has) canceled at the end of the period.
     *
     * @maps cancel_at_end_of_period
     */
    public function setCancelAtEndOfPeriod(?bool $cancelAtEndOfPeriod): void
    {
        $this->cancelAtEndOfPeriod['value'] = $cancelAtEndOfPeriod;
    }

    /**
     * Unsets Cancel at End of Period.
     * Whether or not the subscription will (or has) canceled at the end of the period.
     */
    public function unsetCancelAtEndOfPeriod(): void
    {
        $this->cancelAtEndOfPeriod = [];
    }

    /**
     * Returns Canceled At.
     * The timestamp of the most recent cancellation
     */
    public function getCanceledAt(): ?string
    {
        if (count($this->canceledAt) == 0) {
            return null;
        }
        return $this->canceledAt['value'];
    }

    /**
     * Sets Canceled At.
     * The timestamp of the most recent cancellation
     *
     * @maps canceled_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setCanceledAt(?string $canceledAt): void
    {
        $this->canceledAt['value'] = $canceledAt;
    }

    /**
     * Unsets Canceled At.
     * The timestamp of the most recent cancellation
     */
    public function unsetCanceledAt(): void
    {
        $this->canceledAt = [];
    }

    /**
     * Returns Current Period Started At.
     * Timestamp relating to the start of the current (recurring) period
     */
    public function getCurrentPeriodStartedAt(): ?string
    {
        return $this->currentPeriodStartedAt;
    }

    /**
     * Sets Current Period Started At.
     * Timestamp relating to the start of the current (recurring) period
     *
     * @maps current_period_started_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setCurrentPeriodStartedAt(?string $currentPeriodStartedAt): void
    {
        $this->currentPeriodStartedAt = $currentPeriodStartedAt;
    }

    /**
     * Returns Previous State.
     * Only valid for webhook payloads The previous state for webhooks that have indicated a change in
     * state. For normal API calls, this will always be the same as the state (current state)
     */
    public function getPreviousState(): ?string
    {
        return $this->previousState;
    }

    /**
     * Sets Previous State.
     * Only valid for webhook payloads The previous state for webhooks that have indicated a change in
     * state. For normal API calls, this will always be the same as the state (current state)
     *
     * @maps previous_state
     * @factory \AdvancedBillingLib\Models\SubscriptionState::checkValue
     */
    public function setPreviousState(?string $previousState): void
    {
        $this->previousState = $previousState;
    }

    /**
     * Returns Signup Payment Id.
     * The ID of the transaction that generated the revenue
     */
    public function getSignupPaymentId(): ?int
    {
        return $this->signupPaymentId;
    }

    /**
     * Sets Signup Payment Id.
     * The ID of the transaction that generated the revenue
     *
     * @maps signup_payment_id
     */
    public function setSignupPaymentId(?int $signupPaymentId): void
    {
        $this->signupPaymentId = $signupPaymentId;
    }

    /**
     * Returns Signup Revenue.
     * The revenue, formatted as a string of decimal separated dollars and,cents, from the subscription
     * signup ($50.00 would be formatted as,50.00)
     */
    public function getSignupRevenue(): ?string
    {
        return $this->signupRevenue;
    }

    /**
     * Sets Signup Revenue.
     * The revenue, formatted as a string of decimal separated dollars and,cents, from the subscription
     * signup ($50.00 would be formatted as,50.00)
     *
     * @maps signup_revenue
     */
    public function setSignupRevenue(?string $signupRevenue): void
    {
        $this->signupRevenue = $signupRevenue;
    }

    /**
     * Returns Delayed Cancel At.
     * Timestamp for when the subscription is currently set to cancel.
     */
    public function getDelayedCancelAt(): ?string
    {
        if (count($this->delayedCancelAt) == 0) {
            return null;
        }
        return $this->delayedCancelAt['value'];
    }

    /**
     * Sets Delayed Cancel At.
     * Timestamp for when the subscription is currently set to cancel.
     *
     * @maps delayed_cancel_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setDelayedCancelAt(?string $delayedCancelAt): void
    {
        $this->delayedCancelAt['value'] = $delayedCancelAt;
    }

    /**
     * Unsets Delayed Cancel At.
     * Timestamp for when the subscription is currently set to cancel.
     */
    public function unsetDelayedCancelAt(): void
    {
        $this->delayedCancelAt = [];
    }

    /**
     * Returns Coupon Code.
     * (deprecated) The coupon code of the single coupon currently applied to the subscription. See
     * coupon_codes instead as subscriptions can now have more than one coupon.
     */
    public function getCouponCode(): ?string
    {
        if (count($this->couponCode) == 0) {
            return null;
        }
        return $this->couponCode['value'];
    }

    /**
     * Sets Coupon Code.
     * (deprecated) The coupon code of the single coupon currently applied to the subscription. See
     * coupon_codes instead as subscriptions can now have more than one coupon.
     *
     * @maps coupon_code
     */
    public function setCouponCode(?string $couponCode): void
    {
        $this->couponCode['value'] = $couponCode;
    }

    /**
     * Unsets Coupon Code.
     * (deprecated) The coupon code of the single coupon currently applied to the subscription. See
     * coupon_codes instead as subscriptions can now have more than one coupon.
     */
    public function unsetCouponCode(): void
    {
        $this->couponCode = [];
    }

    /**
     * Returns Snap Day.
     * The day of the month that the subscription will charge according to calendar billing rules, if used.
     */
    public function getSnapDay(): ?string
    {
        if (count($this->snapDay) == 0) {
            return null;
        }
        return $this->snapDay['value'];
    }

    /**
     * Sets Snap Day.
     * The day of the month that the subscription will charge according to calendar billing rules, if used.
     *
     * @maps snap_day
     */
    public function setSnapDay(?string $snapDay): void
    {
        $this->snapDay['value'] = $snapDay;
    }

    /**
     * Unsets Snap Day.
     * The day of the month that the subscription will charge according to calendar billing rules, if used.
     */
    public function unsetSnapDay(): void
    {
        $this->snapDay = [];
    }

    /**
     * Returns Payment Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     */
    public function getPaymentCollectionMethod(): ?string
    {
        return $this->paymentCollectionMethod;
    }

    /**
     * Sets Payment Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     *
     * @maps payment_collection_method
     * @factory \AdvancedBillingLib\Models\PaymentCollectionMethod::checkValue
     */
    public function setPaymentCollectionMethod(?string $paymentCollectionMethod): void
    {
        $this->paymentCollectionMethod = $paymentCollectionMethod;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Product.
     */
    public function getProduct(): ?Product
    {
        return $this->product;
    }

    /**
     * Sets Product.
     *
     * @maps product
     */
    public function setProduct(?Product $product): void
    {
        $this->product = $product;
    }

    /**
     * Returns Credit Card.
     */
    public function getCreditCard(): ?PaymentProfile
    {
        return $this->creditCard;
    }

    /**
     * Sets Credit Card.
     *
     * @maps credit_card
     */
    public function setCreditCard(?PaymentProfile $creditCard): void
    {
        $this->creditCard = $creditCard;
    }

    /**
     * Returns Group.
     */
    public function getGroup(): ?NestedSubscriptionGroup
    {
        if (count($this->group) == 0) {
            return null;
        }
        return $this->group['value'];
    }

    /**
     * Sets Group.
     *
     * @maps group
     * @mapsBy anyOf(oneOf(NestedSubscriptionGroup),null)
     */
    public function setGroup(?NestedSubscriptionGroup $group): void
    {
        $this->group['value'] = $group;
    }

    /**
     * Unsets Group.
     */
    public function unsetGroup(): void
    {
        $this->group = [];
    }

    /**
     * Returns Bank Account.
     */
    public function getBankAccount(): ?SubscriptionBankAccount
    {
        return $this->bankAccount;
    }

    /**
     * Sets Bank Account.
     *
     * @maps bank_account
     */
    public function setBankAccount(?SubscriptionBankAccount $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * Returns Payment Type.
     * The payment profile type for the active profile on file.
     */
    public function getPaymentType(): ?string
    {
        if (count($this->paymentType) == 0) {
            return null;
        }
        return $this->paymentType['value'];
    }

    /**
     * Sets Payment Type.
     * The payment profile type for the active profile on file.
     *
     * @maps payment_type
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType['value'] = $paymentType;
    }

    /**
     * Unsets Payment Type.
     * The payment profile type for the active profile on file.
     */
    public function unsetPaymentType(): void
    {
        $this->paymentType = [];
    }

    /**
     * Returns Referral Code.
     * The subscription's unique code that can be given to referrals.
     */
    public function getReferralCode(): ?string
    {
        if (count($this->referralCode) == 0) {
            return null;
        }
        return $this->referralCode['value'];
    }

    /**
     * Sets Referral Code.
     * The subscription's unique code that can be given to referrals.
     *
     * @maps referral_code
     */
    public function setReferralCode(?string $referralCode): void
    {
        $this->referralCode['value'] = $referralCode;
    }

    /**
     * Unsets Referral Code.
     * The subscription's unique code that can be given to referrals.
     */
    public function unsetReferralCode(): void
    {
        $this->referralCode = [];
    }

    /**
     * Returns Next Product Id.
     * If a delayed product change is scheduled, the ID of the product that the subscription will be
     * changed to at the next renewal.
     */
    public function getNextProductId(): ?int
    {
        if (count($this->nextProductId) == 0) {
            return null;
        }
        return $this->nextProductId['value'];
    }

    /**
     * Sets Next Product Id.
     * If a delayed product change is scheduled, the ID of the product that the subscription will be
     * changed to at the next renewal.
     *
     * @maps next_product_id
     */
    public function setNextProductId(?int $nextProductId): void
    {
        $this->nextProductId['value'] = $nextProductId;
    }

    /**
     * Unsets Next Product Id.
     * If a delayed product change is scheduled, the ID of the product that the subscription will be
     * changed to at the next renewal.
     */
    public function unsetNextProductId(): void
    {
        $this->nextProductId = [];
    }

    /**
     * Returns Next Product Handle.
     * If a delayed product change is scheduled, the handle of the product that the subscription will be
     * changed to at the next renewal.
     */
    public function getNextProductHandle(): ?string
    {
        if (count($this->nextProductHandle) == 0) {
            return null;
        }
        return $this->nextProductHandle['value'];
    }

    /**
     * Sets Next Product Handle.
     * If a delayed product change is scheduled, the handle of the product that the subscription will be
     * changed to at the next renewal.
     *
     * @maps next_product_handle
     */
    public function setNextProductHandle(?string $nextProductHandle): void
    {
        $this->nextProductHandle['value'] = $nextProductHandle;
    }

    /**
     * Unsets Next Product Handle.
     * If a delayed product change is scheduled, the handle of the product that the subscription will be
     * changed to at the next renewal.
     */
    public function unsetNextProductHandle(): void
    {
        $this->nextProductHandle = [];
    }

    /**
     * Returns Coupon Use Count.
     * (deprecated) How many times the subscription's single coupon has been used. This field has no
     * replacement for multiple coupons.
     */
    public function getCouponUseCount(): ?int
    {
        if (count($this->couponUseCount) == 0) {
            return null;
        }
        return $this->couponUseCount['value'];
    }

    /**
     * Sets Coupon Use Count.
     * (deprecated) How many times the subscription's single coupon has been used. This field has no
     * replacement for multiple coupons.
     *
     * @maps coupon_use_count
     */
    public function setCouponUseCount(?int $couponUseCount): void
    {
        $this->couponUseCount['value'] = $couponUseCount;
    }

    /**
     * Unsets Coupon Use Count.
     * (deprecated) How many times the subscription's single coupon has been used. This field has no
     * replacement for multiple coupons.
     */
    public function unsetCouponUseCount(): void
    {
        $this->couponUseCount = [];
    }

    /**
     * Returns Coupon Uses Allowed.
     * (deprecated) How many times the subscription's single coupon may be used. This field has no
     * replacement for multiple coupons.
     */
    public function getCouponUsesAllowed(): ?int
    {
        if (count($this->couponUsesAllowed) == 0) {
            return null;
        }
        return $this->couponUsesAllowed['value'];
    }

    /**
     * Sets Coupon Uses Allowed.
     * (deprecated) How many times the subscription's single coupon may be used. This field has no
     * replacement for multiple coupons.
     *
     * @maps coupon_uses_allowed
     */
    public function setCouponUsesAllowed(?int $couponUsesAllowed): void
    {
        $this->couponUsesAllowed['value'] = $couponUsesAllowed;
    }

    /**
     * Unsets Coupon Uses Allowed.
     * (deprecated) How many times the subscription's single coupon may be used. This field has no
     * replacement for multiple coupons.
     */
    public function unsetCouponUsesAllowed(): void
    {
        $this->couponUsesAllowed = [];
    }

    /**
     * Returns Reason Code.
     * If the subscription is canceled, this is their churn code.
     */
    public function getReasonCode(): ?string
    {
        if (count($this->reasonCode) == 0) {
            return null;
        }
        return $this->reasonCode['value'];
    }

    /**
     * Sets Reason Code.
     * If the subscription is canceled, this is their churn code.
     *
     * @maps reason_code
     */
    public function setReasonCode(?string $reasonCode): void
    {
        $this->reasonCode['value'] = $reasonCode;
    }

    /**
     * Unsets Reason Code.
     * If the subscription is canceled, this is their churn code.
     */
    public function unsetReasonCode(): void
    {
        $this->reasonCode = [];
    }

    /**
     * Returns Automatically Resume At.
     * The date the subscription is scheduled to automatically resume from the on_hold state.
     */
    public function getAutomaticallyResumeAt(): ?string
    {
        if (count($this->automaticallyResumeAt) == 0) {
            return null;
        }
        return $this->automaticallyResumeAt['value'];
    }

    /**
     * Sets Automatically Resume At.
     * The date the subscription is scheduled to automatically resume from the on_hold state.
     *
     * @maps automatically_resume_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setAutomaticallyResumeAt(?string $automaticallyResumeAt): void
    {
        $this->automaticallyResumeAt['value'] = $automaticallyResumeAt;
    }

    /**
     * Unsets Automatically Resume At.
     * The date the subscription is scheduled to automatically resume from the on_hold state.
     */
    public function unsetAutomaticallyResumeAt(): void
    {
        $this->automaticallyResumeAt = [];
    }

    /**
     * Returns Coupon Codes.
     * An array for all the coupons attached to the subscription.
     *
     * @return string[]|null
     */
    public function getCouponCodes(): ?array
    {
        return $this->couponCodes;
    }

    /**
     * Sets Coupon Codes.
     * An array for all the coupons attached to the subscription.
     *
     * @maps coupon_codes
     *
     * @param string[]|null $couponCodes
     */
    public function setCouponCodes(?array $couponCodes): void
    {
        $this->couponCodes = $couponCodes;
    }

    /**
     * Returns Offer Id.
     * The ID of the offer associated with the subscription.
     */
    public function getOfferId(): ?int
    {
        if (count($this->offerId) == 0) {
            return null;
        }
        return $this->offerId['value'];
    }

    /**
     * Sets Offer Id.
     * The ID of the offer associated with the subscription.
     *
     * @maps offer_id
     */
    public function setOfferId(?int $offerId): void
    {
        $this->offerId['value'] = $offerId;
    }

    /**
     * Unsets Offer Id.
     * The ID of the offer associated with the subscription.
     */
    public function unsetOfferId(): void
    {
        $this->offerId = [];
    }

    /**
     * Returns Payer Id.
     * On Relationship Invoicing, the ID of the individual paying for the subscription. Defaults to the
     * Customer ID unless the 'Customer Hierarchies & WhoPays' feature is enabled.
     */
    public function getPayerId(): ?int
    {
        if (count($this->payerId) == 0) {
            return null;
        }
        return $this->payerId['value'];
    }

    /**
     * Sets Payer Id.
     * On Relationship Invoicing, the ID of the individual paying for the subscription. Defaults to the
     * Customer ID unless the 'Customer Hierarchies & WhoPays' feature is enabled.
     *
     * @maps payer_id
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId['value'] = $payerId;
    }

    /**
     * Unsets Payer Id.
     * On Relationship Invoicing, the ID of the individual paying for the subscription. Defaults to the
     * Customer ID unless the 'Customer Hierarchies & WhoPays' feature is enabled.
     */
    public function unsetPayerId(): void
    {
        $this->payerId = [];
    }

    /**
     * Returns Current Billing Amount in Cents.
     * The balance in cents plus the estimated renewal amount in cents.
     */
    public function getCurrentBillingAmountInCents(): ?int
    {
        return $this->currentBillingAmountInCents;
    }

    /**
     * Sets Current Billing Amount in Cents.
     * The balance in cents plus the estimated renewal amount in cents.
     *
     * @maps current_billing_amount_in_cents
     */
    public function setCurrentBillingAmountInCents(?int $currentBillingAmountInCents): void
    {
        $this->currentBillingAmountInCents = $currentBillingAmountInCents;
    }

    /**
     * Returns Product Price Point Id.
     * The product price point currently subscribed to.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     * The product price point currently subscribed to.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Product Price Point Type.
     * Price point type. We expose the following types:
     * 1. **default**: a price point that is marked as a default price for a certain product.
     * 2. **custom**: a custom price point.
     * 3. **catalog**: a price point that is **not** marked as a default price for a certain product and is
     * **not** a custom one.
     */
    public function getProductPricePointType(): ?string
    {
        return $this->productPricePointType;
    }

    /**
     * Sets Product Price Point Type.
     * Price point type. We expose the following types:
     * 1. **default**: a price point that is marked as a default price for a certain product.
     * 2. **custom**: a custom price point.
     * 3. **catalog**: a price point that is **not** marked as a default price for a certain product and is
     * **not** a custom one.
     *
     * @maps product_price_point_type
     * @factory \AdvancedBillingLib\Models\PricePointType::checkValue
     */
    public function setProductPricePointType(?string $productPricePointType): void
    {
        $this->productPricePointType = $productPricePointType;
    }

    /**
     * Returns Next Product Price Point Id.
     * If a delayed product change is scheduled, the ID of the product price point that the subscription
     * will be changed to at the next renewal.
     */
    public function getNextProductPricePointId(): ?int
    {
        if (count($this->nextProductPricePointId) == 0) {
            return null;
        }
        return $this->nextProductPricePointId['value'];
    }

    /**
     * Sets Next Product Price Point Id.
     * If a delayed product change is scheduled, the ID of the product price point that the subscription
     * will be changed to at the next renewal.
     *
     * @maps next_product_price_point_id
     */
    public function setNextProductPricePointId(?int $nextProductPricePointId): void
    {
        $this->nextProductPricePointId['value'] = $nextProductPricePointId;
    }

    /**
     * Unsets Next Product Price Point Id.
     * If a delayed product change is scheduled, the ID of the product price point that the subscription
     * will be changed to at the next renewal.
     */
    public function unsetNextProductPricePointId(): void
    {
        $this->nextProductPricePointId = [];
    }

    /**
     * Returns Net Terms.
     * On Relationship Invoicing, the number of days before a renewal invoice is due.
     */
    public function getNetTerms(): ?int
    {
        if (count($this->netTerms) == 0) {
            return null;
        }
        return $this->netTerms['value'];
    }

    /**
     * Sets Net Terms.
     * On Relationship Invoicing, the number of days before a renewal invoice is due.
     *
     * @maps net_terms
     */
    public function setNetTerms(?int $netTerms): void
    {
        $this->netTerms['value'] = $netTerms;
    }

    /**
     * Unsets Net Terms.
     * On Relationship Invoicing, the number of days before a renewal invoice is due.
     */
    public function unsetNetTerms(): void
    {
        $this->netTerms = [];
    }

    /**
     * Returns Stored Credential Transaction Id.
     * For European sites subject to PSD2 and using 3D Secure, this can be used to reference a previous
     * transaction for the customer. This will ensure the card will be charged successfully at renewal.
     */
    public function getStoredCredentialTransactionId(): ?int
    {
        if (count($this->storedCredentialTransactionId) == 0) {
            return null;
        }
        return $this->storedCredentialTransactionId['value'];
    }

    /**
     * Sets Stored Credential Transaction Id.
     * For European sites subject to PSD2 and using 3D Secure, this can be used to reference a previous
     * transaction for the customer. This will ensure the card will be charged successfully at renewal.
     *
     * @maps stored_credential_transaction_id
     */
    public function setStoredCredentialTransactionId(?int $storedCredentialTransactionId): void
    {
        $this->storedCredentialTransactionId['value'] = $storedCredentialTransactionId;
    }

    /**
     * Unsets Stored Credential Transaction Id.
     * For European sites subject to PSD2 and using 3D Secure, this can be used to reference a previous
     * transaction for the customer. This will ensure the card will be charged successfully at renewal.
     */
    public function unsetStoredCredentialTransactionId(): void
    {
        $this->storedCredentialTransactionId = [];
    }

    /**
     * Returns Reference.
     * The reference value (provided by your app) for the subscription itelf.
     */
    public function getReference(): ?string
    {
        if (count($this->reference) == 0) {
            return null;
        }
        return $this->reference['value'];
    }

    /**
     * Sets Reference.
     * The reference value (provided by your app) for the subscription itelf.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference['value'] = $reference;
    }

    /**
     * Unsets Reference.
     * The reference value (provided by your app) for the subscription itelf.
     */
    public function unsetReference(): void
    {
        $this->reference = [];
    }

    /**
     * Returns On Hold At.
     * The timestamp of the most recent on hold action.
     */
    public function getOnHoldAt(): ?string
    {
        if (count($this->onHoldAt) == 0) {
            return null;
        }
        return $this->onHoldAt['value'];
    }

    /**
     * Sets On Hold At.
     * The timestamp of the most recent on hold action.
     *
     * @maps on_hold_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setOnHoldAt(?string $onHoldAt): void
    {
        $this->onHoldAt['value'] = $onHoldAt;
    }

    /**
     * Unsets On Hold At.
     * The timestamp of the most recent on hold action.
     */
    public function unsetOnHoldAt(): void
    {
        $this->onHoldAt = [];
    }

    /**
     * Returns Prepaid Dunning.
     * Boolean representing whether the subscription is prepaid and currently in dunning. Only returned for
     * Relationship Invoicing sites with the feature enabled
     */
    public function getPrepaidDunning(): ?bool
    {
        return $this->prepaidDunning;
    }

    /**
     * Sets Prepaid Dunning.
     * Boolean representing whether the subscription is prepaid and currently in dunning. Only returned for
     * Relationship Invoicing sites with the feature enabled
     *
     * @maps prepaid_dunning
     */
    public function setPrepaidDunning(?bool $prepaidDunning): void
    {
        $this->prepaidDunning = $prepaidDunning;
    }

    /**
     * Returns Coupons.
     * Additional coupon data. To use this data you also have to include the following param in the
     * request`include[]=coupons`.
     * Only in Read Subscription Endpoint.
     *
     * @return SubscriptionIncludedCoupon[]|null
     */
    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    /**
     * Sets Coupons.
     * Additional coupon data. To use this data you also have to include the following param in the
     * request`include[]=coupons`.
     * Only in Read Subscription Endpoint.
     *
     * @maps coupons
     *
     * @param SubscriptionIncludedCoupon[]|null $coupons
     */
    public function setCoupons(?array $coupons): void
    {
        $this->coupons = $coupons;
    }

    /**
     * Returns Dunning Communication Delay Enabled.
     * Enable Communication Delay feature, making sure no communication (email or SMS) is sent to the
     * Customer between 9PM and 8AM in time zone set by the `dunning_communication_delay_time_zone`
     * attribute.
     */
    public function getDunningCommunicationDelayEnabled(): ?bool
    {
        return $this->dunningCommunicationDelayEnabled;
    }

    /**
     * Sets Dunning Communication Delay Enabled.
     * Enable Communication Delay feature, making sure no communication (email or SMS) is sent to the
     * Customer between 9PM and 8AM in time zone set by the `dunning_communication_delay_time_zone`
     * attribute.
     *
     * @maps dunning_communication_delay_enabled
     */
    public function setDunningCommunicationDelayEnabled(?bool $dunningCommunicationDelayEnabled): void
    {
        $this->dunningCommunicationDelayEnabled = $dunningCommunicationDelayEnabled;
    }

    /**
     * Returns Dunning Communication Delay Time Zone.
     * Time zone for the Dunning Communication Delay feature.
     */
    public function getDunningCommunicationDelayTimeZone(): ?string
    {
        if (count($this->dunningCommunicationDelayTimeZone) == 0) {
            return null;
        }
        return $this->dunningCommunicationDelayTimeZone['value'];
    }

    /**
     * Sets Dunning Communication Delay Time Zone.
     * Time zone for the Dunning Communication Delay feature.
     *
     * @maps dunning_communication_delay_time_zone
     */
    public function setDunningCommunicationDelayTimeZone(?string $dunningCommunicationDelayTimeZone): void
    {
        $this->dunningCommunicationDelayTimeZone['value'] = $dunningCommunicationDelayTimeZone;
    }

    /**
     * Unsets Dunning Communication Delay Time Zone.
     * Time zone for the Dunning Communication Delay feature.
     */
    public function unsetDunningCommunicationDelayTimeZone(): void
    {
        $this->dunningCommunicationDelayTimeZone = [];
    }

    /**
     * Returns Receives Invoice Emails.
     */
    public function getReceivesInvoiceEmails(): ?bool
    {
        if (count($this->receivesInvoiceEmails) == 0) {
            return null;
        }
        return $this->receivesInvoiceEmails['value'];
    }

    /**
     * Sets Receives Invoice Emails.
     *
     * @maps receives_invoice_emails
     */
    public function setReceivesInvoiceEmails(?bool $receivesInvoiceEmails): void
    {
        $this->receivesInvoiceEmails['value'] = $receivesInvoiceEmails;
    }

    /**
     * Unsets Receives Invoice Emails.
     */
    public function unsetReceivesInvoiceEmails(): void
    {
        $this->receivesInvoiceEmails = [];
    }

    /**
     * Returns Locale.
     */
    public function getLocale(): ?string
    {
        if (count($this->locale) == 0) {
            return null;
        }
        return $this->locale['value'];
    }

    /**
     * Sets Locale.
     *
     * @maps locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale['value'] = $locale;
    }

    /**
     * Unsets Locale.
     */
    public function unsetLocale(): void
    {
        $this->locale = [];
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Scheduled Cancellation At.
     */
    public function getScheduledCancellationAt(): ?string
    {
        if (count($this->scheduledCancellationAt) == 0) {
            return null;
        }
        return $this->scheduledCancellationAt['value'];
    }

    /**
     * Sets Scheduled Cancellation At.
     *
     * @maps scheduled_cancellation_at
     * @factory \AdvancedBillingLib\Models\StringDate::toString
     */
    public function setScheduledCancellationAt(?string $scheduledCancellationAt): void
    {
        $this->scheduledCancellationAt['value'] = $scheduledCancellationAt;
    }

    /**
     * Unsets Scheduled Cancellation At.
     */
    public function unsetScheduledCancellationAt(): void
    {
        $this->scheduledCancellationAt = [];
    }

    /**
     * Returns Credit Balance in Cents.
     */
    public function getCreditBalanceInCents(): ?int
    {
        return $this->creditBalanceInCents;
    }

    /**
     * Sets Credit Balance in Cents.
     *
     * @maps credit_balance_in_cents
     */
    public function setCreditBalanceInCents(?int $creditBalanceInCents): void
    {
        $this->creditBalanceInCents = $creditBalanceInCents;
    }

    /**
     * Returns Prepayment Balance in Cents.
     */
    public function getPrepaymentBalanceInCents(): ?int
    {
        return $this->prepaymentBalanceInCents;
    }

    /**
     * Sets Prepayment Balance in Cents.
     *
     * @maps prepayment_balance_in_cents
     */
    public function setPrepaymentBalanceInCents(?int $prepaymentBalanceInCents): void
    {
        $this->prepaymentBalanceInCents = $prepaymentBalanceInCents;
    }

    /**
     * Returns Prepaid Configuration.
     */
    public function getPrepaidConfiguration(): ?PrepaidConfiguration
    {
        return $this->prepaidConfiguration;
    }

    /**
     * Sets Prepaid Configuration.
     *
     * @maps prepaid_configuration
     */
    public function setPrepaidConfiguration(?PrepaidConfiguration $prepaidConfiguration): void
    {
        $this->prepaidConfiguration = $prepaidConfiguration;
    }

    /**
     * Returns Self Service Page Token.
     * Returned only for list/read Subscription operation when `include[]=self_service_page_token`
     * parameter is provided.
     */
    public function getSelfServicePageToken(): ?string
    {
        return $this->selfServicePageToken;
    }

    /**
     * Sets Self Service Page Token.
     * Returned only for list/read Subscription operation when `include[]=self_service_page_token`
     * parameter is provided.
     *
     * @maps self_service_page_token
     */
    public function setSelfServicePageToken(?string $selfServicePageToken): void
    {
        $this->selfServicePageToken = $selfServicePageToken;
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
    public function jsonSerialize(
        bool $asArrayWhenEmpty = false
    )
    {
        $json = [];
        if (isset($this->id)) {
            $json['id'] = $this->id;
        }
        if (isset($this->state)) {
            $json['state'] = SubscriptionState::checkValue($this->state);
        }
        if (isset($this->balanceInCents)) {
            $json['balance_in_cents'] = $this->balanceInCents;
        }
        if (isset($this->totalRevenueInCents)) {
            $json['total_revenue_in_cents'] = $this->totalRevenueInCents;
        }
        if (isset($this->productPriceInCents)) {
            $json['product_price_in_cents'] = $this->productPriceInCents;
        }
        if (isset($this->productVersionNumber)) {
            $json['product_version_number'] = $this->productVersionNumber;
        }
        if (isset($this->currentPeriodEndsAt)) {
            $json['current_period_ends_at'] = $this->currentPeriodEndsAt;
        }
        if (isset($this->nextAssessmentAt)) {
            $json['next_assessment_at'] = $this->nextAssessmentAt;
        }
        if (!empty($this->trialStartedAt)) {
            $json['trial_started_at'] = $this->trialStartedAt['value'];
        }
        if (!empty($this->trialEndedAt)) {
            $json['trial_ended_at'] = $this->trialEndedAt['value'];
        }
        if (isset($this->activatedAt)) {
            $json['activated_at'] = $this->activatedAt;
        }
        if (!empty($this->expiresAt)) {
            $json['expires_at'] = $this->expiresAt['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at'] = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at'] = $this->updatedAt;
        }
        if (!empty($this->cancellationMessage)) {
            $json['cancellation_message'] = $this->cancellationMessage['value'];
        }
        if (!empty($this->cancellationMethod)) {
            $json['cancellation_method'] =
                CancellationMethod::checkValue(
                    $this->cancellationMethod['value']
                );
        }
        if (!empty($this->cancelAtEndOfPeriod)) {
            $json['cancel_at_end_of_period'] = $this->cancelAtEndOfPeriod['value'];
        }
        if (!empty($this->canceledAt)) {
            $json['canceled_at'] = $this->canceledAt['value'];
        }
        if (isset($this->currentPeriodStartedAt)) {
            $json['current_period_started_at'] = $this->currentPeriodStartedAt;
        }
        if (isset($this->previousState)) {
            $json['previous_state'] = SubscriptionState::checkValue($this->previousState);
        }
        if (isset($this->signupPaymentId)) {
            $json['signup_payment_id'] = $this->signupPaymentId;
        }
        if (isset($this->signupRevenue)) {
            $json['signup_revenue'] = $this->signupRevenue;
        }
        if (!empty($this->delayedCancelAt)) {
            $json['delayed_cancel_at'] = $this->delayedCancelAt['value'];
        }
        if (!empty($this->couponCode)) {
            $json['coupon_code'] = $this->couponCode['value'];
        }
        if (!empty($this->snapDay)) {
            $json['snap_day'] = $this->snapDay['value'];
        }
        if (isset($this->paymentCollectionMethod)) {
            $json['payment_collection_method'] =
                PaymentCollectionMethod::checkValue(
                    $this->paymentCollectionMethod
                );
        }
        if (isset($this->customer)) {
            $json['customer'] = $this->customer;
        }
        if (isset($this->product)) {
            $json['product'] = $this->product;
        }
        if (isset($this->creditCard)) {
            $json['credit_card'] = $this->creditCard;
        }
        if (!empty($this->group)) {
            $json['group'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->group['value'],
                    'anyOf(oneOf(NestedSubscriptionGroup),null)'
                );
        }
        if (isset($this->bankAccount)) {
            $json['bank_account'] = $this->bankAccount;
        }
        if (!empty($this->paymentType)) {
            $json['payment_type'] = $this->paymentType['value'];
        }
        if (!empty($this->referralCode)) {
            $json['referral_code'] = $this->referralCode['value'];
        }
        if (!empty($this->nextProductId)) {
            $json['next_product_id'] = $this->nextProductId['value'];
        }
        if (!empty($this->nextProductHandle)) {
            $json['next_product_handle'] = $this->nextProductHandle['value'];
        }
        if (!empty($this->couponUseCount)) {
            $json['coupon_use_count'] = $this->couponUseCount['value'];
        }
        if (!empty($this->couponUsesAllowed)) {
            $json['coupon_uses_allowed'] = $this->couponUsesAllowed['value'];
        }
        if (!empty($this->reasonCode)) {
            $json['reason_code'] = $this->reasonCode['value'];
        }
        if (!empty($this->automaticallyResumeAt)) {
            $json['automatically_resume_at'] = $this->automaticallyResumeAt['value'];
        }
        if (isset($this->couponCodes)) {
            $json['coupon_codes'] = $this->couponCodes;
        }
        if (!empty($this->offerId)) {
            $json['offer_id'] = $this->offerId['value'];
        }
        if (!empty($this->payerId)) {
            $json['payer_id'] = $this->payerId['value'];
        }
        if (isset($this->currentBillingAmountInCents)) {
            $json['current_billing_amount_in_cents'] = $this->currentBillingAmountInCents;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id'] = $this->productPricePointId;
        }
        if (isset($this->productPricePointType)) {
            $json['product_price_point_type'] = PricePointType::checkValue($this->productPricePointType);
        }
        if (!empty($this->nextProductPricePointId)) {
            $json['next_product_price_point_id'] = $this->nextProductPricePointId['value'];
        }
        if (!empty($this->netTerms)) {
            $json['net_terms'] = $this->netTerms['value'];
        }
        if (!empty($this->storedCredentialTransactionId)) {
            $json['stored_credential_transaction_id'] = $this->storedCredentialTransactionId['value'];
        }
        if (!empty($this->reference)) {
            $json['reference'] = $this->reference['value'];
        }
        if (!empty($this->onHoldAt)) {
            $json['on_hold_at'] = $this->onHoldAt['value'];
        }
        if (isset($this->prepaidDunning)) {
            $json['prepaid_dunning'] = $this->prepaidDunning;
        }
        if (isset($this->coupons)) {
            $json['coupons'] = $this->coupons;
        }
        if (isset($this->dunningCommunicationDelayEnabled)) {
            $json['dunning_communication_delay_enabled'] = $this->dunningCommunicationDelayEnabled;
        }
        if (!empty($this->dunningCommunicationDelayTimeZone)) {
            $json['dunning_communication_delay_time_zone'] = $this->dunningCommunicationDelayTimeZone['value'];
        }
        if (!empty($this->receivesInvoiceEmails)) {
            $json['receives_invoice_emails'] = $this->receivesInvoiceEmails['value'];
        }
        if (!empty($this->locale)) {
            $json['locale'] = $this->locale['value'];
        }
        if (isset($this->currency)) {
            $json['currency'] = $this->currency;
        }
        if (!empty($this->scheduledCancellationAt)) {
            $json['scheduled_cancellation_at'] = $this->scheduledCancellationAt['value'];
        }
        if (isset($this->creditBalanceInCents)) {
            $json['credit_balance_in_cents'] = $this->creditBalanceInCents;
        }
        if (isset($this->prepaymentBalanceInCents)) {
            $json['prepayment_balance_in_cents'] = $this->prepaymentBalanceInCents;
        }
        if (isset($this->prepaidConfiguration)) {
            $json['prepaid_configuration'] = $this->prepaidConfiguration;
        }
        if (isset($this->selfServicePageToken)) {
            $json['self_service_page_token'] = $this->selfServicePageToken;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
