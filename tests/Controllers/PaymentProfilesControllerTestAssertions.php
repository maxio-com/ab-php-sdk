<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\BankAccountPaymentProfile;
use AdvancedBillingLib\Models\CreditCardPaymentProfile;
use AdvancedBillingLib\Models\PaymentProfileResponse;
use AdvancedBillingLib\Tests\TestData\PaymentProfileTestData;

final class PaymentProfilesControllerTestAssertions
{
    private const EXPECTED_FOUND_PAYMENT_PROFILES_NUMBER = 1;

    public function __construct(private PaymentProfilesControllerTest $testCase)
    {
    }

    public function assertPaymentProfileCreated(
        CreditCardPaymentProfile|BankAccountPaymentProfile $expectedPaymentProfile,
        CreditCardPaymentProfile|BankAccountPaymentProfile $paymentProfile
    ): void
    {
        $this->testCase::assertEquals($expectedPaymentProfile, $paymentProfile);
    }

    /**
     * @param array<int, PaymentProfileResponse> $paymentProfiles
     */
    public function assertNoPaymentProfilesFound(array $paymentProfiles): void
    {
        $this->testCase::assertEmpty($paymentProfiles);
    }

    /**
     * @param array<int, PaymentProfileResponse> $paymentProfiles
     */
    public function assertPaymentProfilesFound(
        array $paymentProfiles,
        CreditCardPaymentProfile|BankAccountPaymentProfile $expectedPaymentProfile
    ): void
    {
        $this->testCase::assertCount(self::EXPECTED_FOUND_PAYMENT_PROFILES_NUMBER, $paymentProfiles);

        $paymentProfile = $paymentProfiles[0]->getPaymentProfile();

        $this->testCase::assertEquals($expectedPaymentProfile->getId(), $paymentProfile->getId());
        $this->testCase::assertEquals($expectedPaymentProfile->getPaymentType(), $paymentProfile->getPaymentType());
    }

    public function assertPaymentProfileFound(
        CreditCardPaymentProfile|BankAccountPaymentProfile $foundPaymentProfile,
        CreditCardPaymentProfile|BankAccountPaymentProfile $paymentProfile
    ): void
    {
        $this->testCase::assertEquals($paymentProfile->getId(), $foundPaymentProfile->getId());
    }

    public function assertPaymentProfileUpdated(
        CreditCardPaymentProfile|BankAccountPaymentProfile $updatedPaymentProfile,
        CreditCardPaymentProfile|BankAccountPaymentProfile $paymentProfile
    ): void
    {
        $this->testCase::assertNotEquals($paymentProfile->getFirstName(), $updatedPaymentProfile->getFirstName());
        $this->testCase::assertNotEquals($paymentProfile->getLastName(), $updatedPaymentProfile->getLastName());
        $this->testCase::assertEquals(
            PaymentProfileTestData::UPDATED_FIRST_NAME,
            $updatedPaymentProfile->getFirstName()
        );
        $this->testCase::assertEquals(PaymentProfileTestData::UPDATED_LAST_NAME, $updatedPaymentProfile->getLastName());
    }
}
