<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BankAccountPaymentProfile;
use AdvancedBillingLib\Models\CreditCardPaymentProfile;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\NestedSubscriptionGroup;
use AdvancedBillingLib\Models\PrepaidConfiguration;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Models\SubscriptionIncludedCoupon;
use Core\Utils\CoreHelper;

/**
 * Builder for model Subscription
 *
 * @see Subscription
 */
class SubscriptionBuilder
{
    /**
     * @var Subscription
     */
    private $instance;

    private function __construct(Subscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new Subscription());
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
     * Sets state field.
     *
     * @param string|null $value
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets balance in cents field.
     *
     * @param int|null $value
     */
    public function balanceInCents(?int $value): self
    {
        $this->instance->setBalanceInCents($value);
        return $this;
    }

    /**
     * Sets total revenue in cents field.
     *
     * @param int|null $value
     */
    public function totalRevenueInCents(?int $value): self
    {
        $this->instance->setTotalRevenueInCents($value);
        return $this;
    }

    /**
     * Sets product price in cents field.
     *
     * @param int|null $value
     */
    public function productPriceInCents(?int $value): self
    {
        $this->instance->setProductPriceInCents($value);
        return $this;
    }

    /**
     * Sets product version number field.
     *
     * @param int|null $value
     */
    public function productVersionNumber(?int $value): self
    {
        $this->instance->setProductVersionNumber($value);
        return $this;
    }

    /**
     * Sets current period ends at field.
     *
     * @param \DateTime|null $value
     */
    public function currentPeriodEndsAt(?\DateTime $value): self
    {
        $this->instance->setCurrentPeriodEndsAt($value);
        return $this;
    }

    /**
     * Unsets current period ends at field.
     */
    public function unsetCurrentPeriodEndsAt(): self
    {
        $this->instance->unsetCurrentPeriodEndsAt();
        return $this;
    }

    /**
     * Sets next assessment at field.
     *
     * @param \DateTime|null $value
     */
    public function nextAssessmentAt(?\DateTime $value): self
    {
        $this->instance->setNextAssessmentAt($value);
        return $this;
    }

    /**
     * Unsets next assessment at field.
     */
    public function unsetNextAssessmentAt(): self
    {
        $this->instance->unsetNextAssessmentAt();
        return $this;
    }

    /**
     * Sets trial started at field.
     *
     * @param \DateTime|null $value
     */
    public function trialStartedAt(?\DateTime $value): self
    {
        $this->instance->setTrialStartedAt($value);
        return $this;
    }

    /**
     * Unsets trial started at field.
     */
    public function unsetTrialStartedAt(): self
    {
        $this->instance->unsetTrialStartedAt();
        return $this;
    }

    /**
     * Sets trial ended at field.
     *
     * @param \DateTime|null $value
     */
    public function trialEndedAt(?\DateTime $value): self
    {
        $this->instance->setTrialEndedAt($value);
        return $this;
    }

    /**
     * Unsets trial ended at field.
     */
    public function unsetTrialEndedAt(): self
    {
        $this->instance->unsetTrialEndedAt();
        return $this;
    }

    /**
     * Sets activated at field.
     *
     * @param \DateTime|null $value
     */
    public function activatedAt(?\DateTime $value): self
    {
        $this->instance->setActivatedAt($value);
        return $this;
    }

    /**
     * Unsets activated at field.
     */
    public function unsetActivatedAt(): self
    {
        $this->instance->unsetActivatedAt();
        return $this;
    }

    /**
     * Sets expires at field.
     *
     * @param \DateTime|null $value
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Unsets expires at field.
     */
    public function unsetExpiresAt(): self
    {
        $this->instance->unsetExpiresAt();
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets cancellation message field.
     *
     * @param string|null $value
     */
    public function cancellationMessage(?string $value): self
    {
        $this->instance->setCancellationMessage($value);
        return $this;
    }

    /**
     * Unsets cancellation message field.
     */
    public function unsetCancellationMessage(): self
    {
        $this->instance->unsetCancellationMessage();
        return $this;
    }

    /**
     * Sets cancellation method field.
     *
     * @param string|null $value
     */
    public function cancellationMethod(?string $value): self
    {
        $this->instance->setCancellationMethod($value);
        return $this;
    }

    /**
     * Unsets cancellation method field.
     */
    public function unsetCancellationMethod(): self
    {
        $this->instance->unsetCancellationMethod();
        return $this;
    }

    /**
     * Sets cancel at end of period field.
     *
     * @param bool|null $value
     */
    public function cancelAtEndOfPeriod(?bool $value): self
    {
        $this->instance->setCancelAtEndOfPeriod($value);
        return $this;
    }

    /**
     * Unsets cancel at end of period field.
     */
    public function unsetCancelAtEndOfPeriod(): self
    {
        $this->instance->unsetCancelAtEndOfPeriod();
        return $this;
    }

    /**
     * Sets canceled at field.
     *
     * @param \DateTime|null $value
     */
    public function canceledAt(?\DateTime $value): self
    {
        $this->instance->setCanceledAt($value);
        return $this;
    }

    /**
     * Unsets canceled at field.
     */
    public function unsetCanceledAt(): self
    {
        $this->instance->unsetCanceledAt();
        return $this;
    }

    /**
     * Sets current period started at field.
     *
     * @param \DateTime|null $value
     */
    public function currentPeriodStartedAt(?\DateTime $value): self
    {
        $this->instance->setCurrentPeriodStartedAt($value);
        return $this;
    }

    /**
     * Unsets current period started at field.
     */
    public function unsetCurrentPeriodStartedAt(): self
    {
        $this->instance->unsetCurrentPeriodStartedAt();
        return $this;
    }

    /**
     * Sets previous state field.
     *
     * @param string|null $value
     */
    public function previousState(?string $value): self
    {
        $this->instance->setPreviousState($value);
        return $this;
    }

    /**
     * Sets signup payment id field.
     *
     * @param int|null $value
     */
    public function signupPaymentId(?int $value): self
    {
        $this->instance->setSignupPaymentId($value);
        return $this;
    }

    /**
     * Sets signup revenue field.
     *
     * @param string|null $value
     */
    public function signupRevenue(?string $value): self
    {
        $this->instance->setSignupRevenue($value);
        return $this;
    }

    /**
     * Sets delayed cancel at field.
     *
     * @param \DateTime|null $value
     */
    public function delayedCancelAt(?\DateTime $value): self
    {
        $this->instance->setDelayedCancelAt($value);
        return $this;
    }

    /**
     * Unsets delayed cancel at field.
     */
    public function unsetDelayedCancelAt(): self
    {
        $this->instance->unsetDelayedCancelAt();
        return $this;
    }

    /**
     * Sets coupon code field.
     *
     * @param string|null $value
     */
    public function couponCode(?string $value): self
    {
        $this->instance->setCouponCode($value);
        return $this;
    }

    /**
     * Unsets coupon code field.
     */
    public function unsetCouponCode(): self
    {
        $this->instance->unsetCouponCode();
        return $this;
    }

    /**
     * Sets snap day field.
     *
     * @param string|null $value
     */
    public function snapDay(?string $value): self
    {
        $this->instance->setSnapDay($value);
        return $this;
    }

    /**
     * Unsets snap day field.
     */
    public function unsetSnapDay(): self
    {
        $this->instance->unsetSnapDay();
        return $this;
    }

    /**
     * Sets payment collection method field.
     *
     * @param string|null $value
     */
    public function paymentCollectionMethod(?string $value): self
    {
        $this->instance->setPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Sets customer field.
     *
     * @param Customer|null $value
     */
    public function customer(?Customer $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets product field.
     *
     * @param Product|null $value
     */
    public function product(?Product $value): self
    {
        $this->instance->setProduct($value);
        return $this;
    }

    /**
     * Sets credit card field.
     *
     * @param CreditCardPaymentProfile|null $value
     */
    public function creditCard(?CreditCardPaymentProfile $value): self
    {
        $this->instance->setCreditCard($value);
        return $this;
    }

    /**
     * Sets group field.
     *
     * @param NestedSubscriptionGroup|null $value
     */
    public function group(?NestedSubscriptionGroup $value): self
    {
        $this->instance->setGroup($value);
        return $this;
    }

    /**
     * Unsets group field.
     */
    public function unsetGroup(): self
    {
        $this->instance->unsetGroup();
        return $this;
    }

    /**
     * Sets bank account field.
     *
     * @param BankAccountPaymentProfile|null $value
     */
    public function bankAccount(?BankAccountPaymentProfile $value): self
    {
        $this->instance->setBankAccount($value);
        return $this;
    }

    /**
     * Sets payment type field.
     *
     * @param string|null $value
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Unsets payment type field.
     */
    public function unsetPaymentType(): self
    {
        $this->instance->unsetPaymentType();
        return $this;
    }

    /**
     * Sets referral code field.
     *
     * @param string|null $value
     */
    public function referralCode(?string $value): self
    {
        $this->instance->setReferralCode($value);
        return $this;
    }

    /**
     * Unsets referral code field.
     */
    public function unsetReferralCode(): self
    {
        $this->instance->unsetReferralCode();
        return $this;
    }

    /**
     * Sets next product id field.
     *
     * @param int|null $value
     */
    public function nextProductId(?int $value): self
    {
        $this->instance->setNextProductId($value);
        return $this;
    }

    /**
     * Unsets next product id field.
     */
    public function unsetNextProductId(): self
    {
        $this->instance->unsetNextProductId();
        return $this;
    }

    /**
     * Sets next product handle field.
     *
     * @param string|null $value
     */
    public function nextProductHandle(?string $value): self
    {
        $this->instance->setNextProductHandle($value);
        return $this;
    }

    /**
     * Unsets next product handle field.
     */
    public function unsetNextProductHandle(): self
    {
        $this->instance->unsetNextProductHandle();
        return $this;
    }

    /**
     * Sets coupon use count field.
     *
     * @param int|null $value
     */
    public function couponUseCount(?int $value): self
    {
        $this->instance->setCouponUseCount($value);
        return $this;
    }

    /**
     * Unsets coupon use count field.
     */
    public function unsetCouponUseCount(): self
    {
        $this->instance->unsetCouponUseCount();
        return $this;
    }

    /**
     * Sets coupon uses allowed field.
     *
     * @param int|null $value
     */
    public function couponUsesAllowed(?int $value): self
    {
        $this->instance->setCouponUsesAllowed($value);
        return $this;
    }

    /**
     * Unsets coupon uses allowed field.
     */
    public function unsetCouponUsesAllowed(): self
    {
        $this->instance->unsetCouponUsesAllowed();
        return $this;
    }

    /**
     * Sets reason code field.
     *
     * @param string|null $value
     */
    public function reasonCode(?string $value): self
    {
        $this->instance->setReasonCode($value);
        return $this;
    }

    /**
     * Unsets reason code field.
     */
    public function unsetReasonCode(): self
    {
        $this->instance->unsetReasonCode();
        return $this;
    }

    /**
     * Sets automatically resume at field.
     *
     * @param \DateTime|null $value
     */
    public function automaticallyResumeAt(?\DateTime $value): self
    {
        $this->instance->setAutomaticallyResumeAt($value);
        return $this;
    }

    /**
     * Unsets automatically resume at field.
     */
    public function unsetAutomaticallyResumeAt(): self
    {
        $this->instance->unsetAutomaticallyResumeAt();
        return $this;
    }

    /**
     * Sets coupon codes field.
     *
     * @param string[]|null $value
     */
    public function couponCodes(?array $value): self
    {
        $this->instance->setCouponCodes($value);
        return $this;
    }

    /**
     * Sets offer id field.
     *
     * @param int|null $value
     */
    public function offerId(?int $value): self
    {
        $this->instance->setOfferId($value);
        return $this;
    }

    /**
     * Unsets offer id field.
     */
    public function unsetOfferId(): self
    {
        $this->instance->unsetOfferId();
        return $this;
    }

    /**
     * Sets payer id field.
     *
     * @param int|null $value
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Unsets payer id field.
     */
    public function unsetPayerId(): self
    {
        $this->instance->unsetPayerId();
        return $this;
    }

    /**
     * Sets current billing amount in cents field.
     *
     * @param int|null $value
     */
    public function currentBillingAmountInCents(?int $value): self
    {
        $this->instance->setCurrentBillingAmountInCents($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     *
     * @param int|null $value
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets product price point type field.
     *
     * @param string|null $value
     */
    public function productPricePointType(?string $value): self
    {
        $this->instance->setProductPricePointType($value);
        return $this;
    }

    /**
     * Sets next product price point id field.
     *
     * @param int|null $value
     */
    public function nextProductPricePointId(?int $value): self
    {
        $this->instance->setNextProductPricePointId($value);
        return $this;
    }

    /**
     * Unsets next product price point id field.
     */
    public function unsetNextProductPricePointId(): self
    {
        $this->instance->unsetNextProductPricePointId();
        return $this;
    }

    /**
     * Sets net terms field.
     *
     * @param int|null $value
     */
    public function netTerms(?int $value): self
    {
        $this->instance->setNetTerms($value);
        return $this;
    }

    /**
     * Unsets net terms field.
     */
    public function unsetNetTerms(): self
    {
        $this->instance->unsetNetTerms();
        return $this;
    }

    /**
     * Sets stored credential transaction id field.
     *
     * @param int|null $value
     */
    public function storedCredentialTransactionId(?int $value): self
    {
        $this->instance->setStoredCredentialTransactionId($value);
        return $this;
    }

    /**
     * Unsets stored credential transaction id field.
     */
    public function unsetStoredCredentialTransactionId(): self
    {
        $this->instance->unsetStoredCredentialTransactionId();
        return $this;
    }

    /**
     * Sets reference field.
     *
     * @param string|null $value
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Unsets reference field.
     */
    public function unsetReference(): self
    {
        $this->instance->unsetReference();
        return $this;
    }

    /**
     * Sets on hold at field.
     *
     * @param \DateTime|null $value
     */
    public function onHoldAt(?\DateTime $value): self
    {
        $this->instance->setOnHoldAt($value);
        return $this;
    }

    /**
     * Unsets on hold at field.
     */
    public function unsetOnHoldAt(): self
    {
        $this->instance->unsetOnHoldAt();
        return $this;
    }

    /**
     * Sets prepaid dunning field.
     *
     * @param bool|null $value
     */
    public function prepaidDunning(?bool $value): self
    {
        $this->instance->setPrepaidDunning($value);
        return $this;
    }

    /**
     * Sets coupons field.
     *
     * @param SubscriptionIncludedCoupon[]|null $value
     */
    public function coupons(?array $value): self
    {
        $this->instance->setCoupons($value);
        return $this;
    }

    /**
     * Sets dunning communication delay enabled field.
     *
     * @param bool|null $value
     */
    public function dunningCommunicationDelayEnabled(?bool $value): self
    {
        $this->instance->setDunningCommunicationDelayEnabled($value);
        return $this;
    }

    /**
     * Sets dunning communication delay time zone field.
     *
     * @param string|null $value
     */
    public function dunningCommunicationDelayTimeZone(?string $value): self
    {
        $this->instance->setDunningCommunicationDelayTimeZone($value);
        return $this;
    }

    /**
     * Unsets dunning communication delay time zone field.
     */
    public function unsetDunningCommunicationDelayTimeZone(): self
    {
        $this->instance->unsetDunningCommunicationDelayTimeZone();
        return $this;
    }

    /**
     * Sets receives invoice emails field.
     *
     * @param bool|null $value
     */
    public function receivesInvoiceEmails(?bool $value): self
    {
        $this->instance->setReceivesInvoiceEmails($value);
        return $this;
    }

    /**
     * Unsets receives invoice emails field.
     */
    public function unsetReceivesInvoiceEmails(): self
    {
        $this->instance->unsetReceivesInvoiceEmails();
        return $this;
    }

    /**
     * Sets locale field.
     *
     * @param string|null $value
     */
    public function locale(?string $value): self
    {
        $this->instance->setLocale($value);
        return $this;
    }

    /**
     * Unsets locale field.
     */
    public function unsetLocale(): self
    {
        $this->instance->unsetLocale();
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets scheduled cancellation at field.
     *
     * @param \DateTime|null $value
     */
    public function scheduledCancellationAt(?\DateTime $value): self
    {
        $this->instance->setScheduledCancellationAt($value);
        return $this;
    }

    /**
     * Unsets scheduled cancellation at field.
     */
    public function unsetScheduledCancellationAt(): self
    {
        $this->instance->unsetScheduledCancellationAt();
        return $this;
    }

    /**
     * Sets credit balance in cents field.
     *
     * @param int|null $value
     */
    public function creditBalanceInCents(?int $value): self
    {
        $this->instance->setCreditBalanceInCents($value);
        return $this;
    }

    /**
     * Sets prepayment balance in cents field.
     *
     * @param int|null $value
     */
    public function prepaymentBalanceInCents(?int $value): self
    {
        $this->instance->setPrepaymentBalanceInCents($value);
        return $this;
    }

    /**
     * Sets prepaid configuration field.
     *
     * @param PrepaidConfiguration|null $value
     */
    public function prepaidConfiguration(?PrepaidConfiguration $value): self
    {
        $this->instance->setPrepaidConfiguration($value);
        return $this;
    }

    /**
     * Unsets prepaid configuration field.
     */
    public function unsetPrepaidConfiguration(): self
    {
        $this->instance->unsetPrepaidConfiguration();
        return $this;
    }

    /**
     * Sets self service page token field.
     *
     * @param string|null $value
     */
    public function selfServicePageToken(?string $value): self
    {
        $this->instance->setSelfServicePageToken($value);
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
     * Initializes a new Subscription object.
     */
    public function build(): Subscription
    {
        return CoreHelper::clone($this->instance);
    }
}
