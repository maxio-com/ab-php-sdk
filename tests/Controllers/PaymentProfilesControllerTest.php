<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;

final class PaymentProfilesControllerTest extends TestCase
{
    private PaymentProfilesControllerTestData $testData;
    private PaymentProfilesControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\PaymentProfilesController::createPaymentProfile
     */
    public function test_CreatePaymentProfile_ShouldCreatePaymentProfile_WhenCustomerExists()
    {
        $customer = $this->testData->loadCustomer();

        $paymentProfile = $this->client
            ->getPaymentProfilesController()
            ->createPaymentProfile($this->testData->createRequest($customer->getId()))
            ->getPaymentProfile();

        $this->assertions->assertPaymentProfileCreated(
            $this->testData->getExpectedPaymentProfile($paymentProfile->getId(), $customer->getId()),
            $paymentProfile
        );

        $this->cleaner->removeUnusedPaymentProfileById($paymentProfile->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new PaymentProfilesControllerTestData(
            $this->client,
            new TestCustomerRequestFactory(),
            new TestPaymentProfileRequestFactory(),
            new TestPaymentProfileFactory()
        );
        $this->assertions = new PaymentProfilesControllerTestAssertions($this);
    }
}
