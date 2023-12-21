<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\SubscriptionBuilder;
use AdvancedBillingLib\Models\Subscription;

final class TestSubscriptionFactory
{
    private const STATE = 'active';
    private const BALANCE_IN_CENTS = 0;
    private const TOTAL_REVENUE_IN_CENTS = 73650;
    private const PRODUCT_PRICE_IN_CENTS = 29900;
    private const PRODUCT_VERSION_NUMBER = 1;
    private const CURRENT_PERIOD_ENDS_AT = '2023-12-30T08:21:32-05:00';
    private const NEXT_ASSESSMENT_AT = '2023-12-30T08:21:32-05:00';
    private const ACTIVATED_AT = '2023-10-30T09:21:32-04:00';
    private const CREATED_AT = '2023-10-30T09:21:32-04:00';
    private const UPDATED_AT = '2023-11-30T08:21:32-05:00';
    private const CURRENT_PERIOD_STARTED_AT = '2023-11-30T08:21:32-05:00';
    private const TRIAL_STARTED_AT = null;
    private const TRIAL_ENDED_AT = null;
    private const EXPIRES_AT = null;
    private const CANCELLATION_MESSAGE = null;
    private const CANCELLATION_METHOD = null;
    private const CANCEL_AT_END_OF_PERIOD = null;
    private const DELAYED_CANCEL_AT = null;
    private const COUPON_CODE = null;
    private const SNAP_DAY = null;
    private const GROUP = null;
    private const REFERRAL_CODE = null;
    private const NEXT_PRODUCT_ID = null;
    private const NEXT_PRODUCT_HANDLE = null;
    private const COUPON_USE_COUNT = null;
    private const COUPON_USES_ALLOWED = null;
    private const REASON_CODE = null;
    private const AUTOMATICALLY_RESUME_AT = null;
    private const OFFER_ID = null;
    private const PAYER_ID = null;
    private const NEXT_PRODUCT_PRICE_POINT_ID = null;
    private const NET_TERMS = null;
    private const STORED_CREDENTIAL_TRANSACTION_ID = null;
    private const REFERENCE = null;
    private const ON_HOLD_AT = null;
    private const DUNNING_COMMUNICATION_DELAY_TIME_ZONE = null;
    private const RECEIVES_INVOICE_EMAILS = null;
    private const LOCALE = null;
    private const SCHEDULED_CANCELLATION_AT = null;
    private const PREPAYMENT_BALANCE_IN_CENTS = 0;
    private const PREVIOUS_STATE = 'active';
    private const SIGNUP_PAYMENT_ID = 11074142;
    private const SIGNUP_REVENUE = '323.00';
    private const PAYMENT_COLLECTION_METHOD = 'automatic';
    private const PAYMENT_TYPE = 'credit_card';
    private const COUPON_CODES = [];
    private const CURRENT_BILLING_AMOUNT_IN_CENTS = 32400;
    private const PRODUCT_PRICE_POINT_ID = 42506;
    private const PRODUCT_PRICE_POINT_TYPE = 'default';
    private const CURRENCY = 'USD';
    private const CREDIT_BALANCE_IN_CENTS = 0;
    private const CANCELED_AT = null;

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
            ->state(self::STATE)
            ->balanceInCents(self::BALANCE_IN_CENTS)
            ->totalRevenueInCents(self::TOTAL_REVENUE_IN_CENTS)
            ->productPriceInCents(self::PRODUCT_PRICE_IN_CENTS)
            ->productVersionNumber(self::PRODUCT_VERSION_NUMBER)
            ->currentPeriodEndsAt(self::CURRENT_PERIOD_ENDS_AT)
            ->nextAssessmentAt(self::NEXT_ASSESSMENT_AT)
            ->activatedAt(self::ACTIVATED_AT)
            ->createdAt(self::CREATED_AT)
            ->updatedAt(self::UPDATED_AT)
            ->currentPeriodStartedAt(self::CURRENT_PERIOD_STARTED_AT)
            ->previousState(self::PREVIOUS_STATE)
            ->signupPaymentId(self::SIGNUP_PAYMENT_ID)
            ->signupRevenue(self::SIGNUP_REVENUE)
            ->paymentCollectionMethod(self::PAYMENT_COLLECTION_METHOD)
            ->customer($this->customerFactory->createWithDefaultValues())
            ->product($this->productFactory->createWithDefaultValues())
            ->creditCard($this->paymentProfileFactory->createWithDefaultValues())
            ->paymentType(self::PAYMENT_TYPE)
            ->couponCodes(self::COUPON_CODES)
            ->currentBillingAmountInCents(self::CURRENT_BILLING_AMOUNT_IN_CENTS)
            ->productPricePointId(self::PRODUCT_PRICE_POINT_ID)
            ->productPricePointType(self::PRODUCT_PRICE_POINT_TYPE)
            ->currency(self::CURRENCY)
            ->creditBalanceInCents(self::CREDIT_BALANCE_IN_CENTS)
            ->trialStartedAt(self::TRIAL_STARTED_AT)
            ->trialEndedAt(self::TRIAL_ENDED_AT)
            ->expiresAt(self::EXPIRES_AT)
            ->cancellationMessage(self::CANCELLATION_MESSAGE)
            ->cancellationMethod(self::CANCELLATION_METHOD)
            ->cancelAtEndOfPeriod(self::CANCEL_AT_END_OF_PERIOD)
            ->canceledAt(self::CANCELED_AT)
            ->delayedCancelAt(self::DELAYED_CANCEL_AT)
            ->couponCode(self::COUPON_CODE)
            ->snapDay(self::SNAP_DAY)
            ->group(self::GROUP)
            ->referralCode(self::REFERRAL_CODE)
            ->nextProductId(self::NEXT_PRODUCT_ID)
            ->nextProductHandle(self::NEXT_PRODUCT_HANDLE)
            ->couponUseCount(self::COUPON_USE_COUNT)
            ->couponUsesAllowed(self::COUPON_USES_ALLOWED)
            ->reasonCode(self::REASON_CODE)
            ->automaticallyResumeAt(self::AUTOMATICALLY_RESUME_AT)
            ->offerId(self::OFFER_ID)
            ->payerId(self::PAYER_ID)
            ->nextProductPricePointId(self::NEXT_PRODUCT_PRICE_POINT_ID)
            ->netTerms(self::NET_TERMS)
            ->storedCredentialTransactionId(self::STORED_CREDENTIAL_TRANSACTION_ID)
            ->reference(self::REFERENCE)
            ->onHoldAt(self::ON_HOLD_AT)
            ->dunningCommunicationDelayTimeZone(self::DUNNING_COMMUNICATION_DELAY_TIME_ZONE)
            ->receivesInvoiceEmails(self::RECEIVES_INVOICE_EMAILS)
            ->locale(self::LOCALE)
            ->scheduledCancellationAt(self::SCHEDULED_CANCELLATION_AT)
            ->prepaymentBalanceInCents(self::PREPAYMENT_BALANCE_IN_CENTS)
            ->build();
    }
}
