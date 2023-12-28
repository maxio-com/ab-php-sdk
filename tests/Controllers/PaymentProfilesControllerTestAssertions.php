<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Models\PaymentProfile;

final class PaymentProfilesControllerTestAssertions
{
    public function __construct(private PaymentProfilesControllerTest $testCase)
    {
    }

    public function assertPaymentProfileCreated(
        CreatedPaymentProfile $expectedPaymentProfile,
        CreatedPaymentProfile $paymentProfile
    ): void
    {
        $this->testCase::assertEquals($expectedPaymentProfile, $paymentProfile);
    }
}
