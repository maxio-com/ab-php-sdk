<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\SubscriptionBuilder;
use AdvancedBillingLib\Models\Subscription;

final class TestSubscriptionFactory
{
    public function __construct(
        private TestCustomerFactory $customerFactory,
        private TestProductFactory $productFactory,
        private TestPaymentProfileFactory $paymentProfileFactory
    ) {
    }

    public function createWithDefaultValuesAndCustomId(int $id): Subscription
    {
        return SubscriptionBuilder::init()
            ->id($id)
            ->state(SubscriptionTestData::STATE)
            ->balanceInCents(SubscriptionTestData::BALANCE_IN_CENTS)
            ->totalRevenueInCents(SubscriptionTestData::TOTAL_REVENUE_IN_CENTS)
            ->productPriceInCents(SubscriptionTestData::PRODUCT_PRICE_IN_CENTS)
            ->productVersionNumber(SubscriptionTestData::PRODUCT_VERSION_NUMBER)
            ->currentPeriodEndsAt(SubscriptionTestData::CURRENT_PERIOD_ENDS_AT)
            ->nextAssessmentAt(SubscriptionTestData::NEXT_ASSESSMENT_AT)
            ->activatedAt(SubscriptionTestData::ACTIVATED_AT)
            ->createdAt(SubscriptionTestData::CREATED_AT)
            ->updatedAt(SubscriptionTestData::UPDATED_AT)
            ->currentPeriodStartedAt(SubscriptionTestData::CURRENT_PERIOD_STARTED_AT)
            ->previousState(SubscriptionTestData::PREVIOUS_STATE)
            ->signupPaymentId(SubscriptionTestData::SIGNUP_PAYMENT_ID)
            ->signupRevenue(SubscriptionTestData::SIGNUP_REVENUE)
            ->paymentCollectionMethod(SubscriptionTestData::PAYMENT_COLLECTION_METHOD)
            ->customer($this->customerFactory->createWithDefaultValues())
            ->product($this->productFactory->createWithDefaultValues())
            ->creditCard($this->paymentProfileFactory->createWithDefaultValues())
            ->paymentType(SubscriptionTestData::PAYMENT_TYPE)
            ->couponCodes(SubscriptionTestData::COUPON_CODES)
            ->currentBillingAmountInCents(SubscriptionTestData::CURRENT_BILLING_AMOUNT_IN_CENTS)
            ->productPricePointId(SubscriptionTestData::PRODUCT_PRICE_POINT_ID)
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
            ->nextProductPricePointId(SubscriptionTestData::NEXT_PRODUCT_PRICE_POINT_ID)
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
}
