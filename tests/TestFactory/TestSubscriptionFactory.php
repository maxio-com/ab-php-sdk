<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\SubscriptionBuilder;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\PaymentProfile;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestData\SubscriptionTestData;
use DateTime;

final class TestSubscriptionFactory
{
    public function createWithComponentPrice(
        int $id,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $activatedAt,
        Customer $customer,
        Product $product,
        PaymentProfile $paymentProfile,
        int $productPricePointId,
        ?int $nextProductPricePointId,
        int $signupPaymentId,
        DateTime $currentPeriodStartedAt,
        DateTime $nextAssessmentAt,
        DateTime $currentPeriodEndsAt,
    ): Subscription
    {
        $subscription = $this->create(
            $id,
            $createdAt,
            $updatedAt,
            $activatedAt,
            $customer,
            $product,
            $paymentProfile,
            $productPricePointId,
            $signupPaymentId,
            $currentPeriodStartedAt,
            $nextAssessmentAt,
            $currentPeriodEndsAt,
            $nextProductPricePointId,
        );

        $subscription->setTotalRevenueInCents(SubscriptionTestData::TOTAL_REVENUE_IN_CENTS_WITH_ONE_COMPONENT);
        $subscription->setSignupRevenue(SubscriptionTestData::SIGNUP_REVENUE_WITH_ONE_COMPONENT);
        $subscription->setCurrentBillingAmountInCents(null);

        return $subscription;
    }

    public function create(
        int $id,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $activatedAt,
        Customer $customer,
        Product $product,
        PaymentProfile $paymentProfile,
        int $productPricePointId,
        int $signupPaymentId,
        DateTime $currentPeriodStartedAt,
        DateTime $nextAssessmentAt,
        DateTime $currentPeriodEndsAt,
        ?int $nextProductPricePointId,
    ): Subscription
    {
        return SubscriptionBuilder::init()
            ->id($id)
            ->state(SubscriptionTestData::STATE)
            ->balanceInCents(SubscriptionTestData::BALANCE_IN_CENTS)
            ->totalRevenueInCents(SubscriptionTestData::TOTAL_REVENUE_IN_CENTS)
            ->productPriceInCents(SubscriptionTestData::PRODUCT_PRICE_IN_CENTS)
            ->productVersionNumber(SubscriptionTestData::PRODUCT_VERSION_NUMBER)
            ->currentPeriodEndsAt($currentPeriodEndsAt)
            ->nextAssessmentAt($nextAssessmentAt)
            ->activatedAt($activatedAt)
            ->createdAt($createdAt)
            ->updatedAt($updatedAt)
            ->currentPeriodStartedAt($currentPeriodStartedAt)
            ->previousState(SubscriptionTestData::PREVIOUS_STATE)
            ->signupPaymentId($signupPaymentId)
            ->signupRevenue(SubscriptionTestData::SIGNUP_REVENUE)
            ->paymentCollectionMethod(SubscriptionTestData::PAYMENT_COLLECTION_METHOD)
            ->customer($customer)
            ->product($product)
            ->creditCard($paymentProfile)
            ->paymentType(SubscriptionTestData::PAYMENT_TYPE)
            ->couponCodes(SubscriptionTestData::COUPON_CODES)
            ->currentBillingAmountInCents(SubscriptionTestData::CURRENT_BILLING_AMOUNT_IN_CENTS)
            ->productPricePointId($productPricePointId)
            ->productPricePointType(SubscriptionTestData::PRODUCT_PRICE_POINT_TYPE)
            ->currency(SubscriptionTestData::CURRENCY)
            ->creditBalanceInCents(SubscriptionTestData::CREDIT_BALANCE_IN_CENTS)
            ->trialStartedAt(SubscriptionTestData::TRIAL_STARTED_AT)
            ->trialEndedAt(SubscriptionTestData::TRIAL_ENDED_AT)
            ->expiresAt(SubscriptionTestData::EXPIRES_AT)
            ->cancellationMessage(SubscriptionTestData::CANCELLATION_MESSAGE)
            ->cancellationMethod(SubscriptionTestData::CANCELLATION_METHOD)
            ->cancelAtEndOfPeriod(SubscriptionTestData::CANCEL_AT_END_OF_PERIOD)
            ->canceledAt(SubscriptionTestData::CANCELED_AT)
            ->delayedCancelAt(SubscriptionTestData::DELAYED_CANCEL_AT)
            ->couponCode(SubscriptionTestData::COUPON_CODE)
            ->snapDay(SubscriptionTestData::SNAP_DAY)
            ->group(SubscriptionTestData::GROUP)
            ->referralCode(SubscriptionTestData::REFERRAL_CODE)
            ->nextProductId(SubscriptionTestData::NEXT_PRODUCT_ID)
            ->nextProductHandle(SubscriptionTestData::NEXT_PRODUCT_HANDLE)
            ->couponUseCount(SubscriptionTestData::COUPON_USE_COUNT)
            ->couponUsesAllowed(SubscriptionTestData::COUPON_USES_ALLOWED)
            ->reasonCode(SubscriptionTestData::REASON_CODE)
            ->automaticallyResumeAt(SubscriptionTestData::AUTOMATICALLY_RESUME_AT)
            ->offerId(SubscriptionTestData::OFFER_ID)
            ->payerId(SubscriptionTestData::PAYER_ID)
            ->nextProductPricePointId($nextProductPricePointId)
            ->netTerms(SubscriptionTestData::NET_TERMS)
            ->storedCredentialTransactionId(SubscriptionTestData::STORED_CREDENTIAL_TRANSACTION_ID)
            ->reference(SubscriptionTestData::REFERENCE)
            ->onHoldAt(SubscriptionTestData::ON_HOLD_AT)
            ->dunningCommunicationDelayTimeZone(SubscriptionTestData::DUNNING_COMMUNICATION_DELAY_TIME_ZONE)
            ->receivesInvoiceEmails(SubscriptionTestData::RECEIVES_INVOICE_EMAILS)
            ->locale(SubscriptionTestData::LOCALE)
            ->scheduledCancellationAt(SubscriptionTestData::SCHEDULED_CANCELLATION_AT)
            ->prepaymentBalanceInCents(SubscriptionTestData::PREPAYMENT_BALANCE_IN_CENTS)
            ->build();
    }

    private function getComponentUnitPriceInCents(Component $component): int
    {
        return (int) $component->getPrices()[0]->getUnitPrice() * 100;
    }

    private function getComponentUnitPriceInDollars(Component $component): float
    {
        return (float) $component->getPrices()[0]->getUnitPrice();
    }

    public function createWithoutBillingAmount(
        int $id,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $activatedAt,
        Customer $customer,
        Product $product,
        PaymentProfile $paymentProfile,
        int $productPricePointId,
        int $signupPaymentId,
        DateTime $currentPeriodStartedAt,
        DateTime $nextAssessmentAt,
        DateTime $currentPeriodEndsAt,
        ?int $nextProductPricePointId,
    ): Subscription
    {
        $subscriptionWithoutBillingAmount = $this->create(
            $id,
            $createdAt,
            $updatedAt,
            $activatedAt,
            $customer,
            $product,
            $paymentProfile,
            $productPricePointId,
            $signupPaymentId,
            $currentPeriodStartedAt,
            $nextAssessmentAt,
            $currentPeriodEndsAt,
            $nextProductPricePointId,
        );
        $subscriptionWithoutBillingAmount->setCurrentBillingAmountInCents(null);

        return $subscriptionWithoutBillingAmount;
    }
}
