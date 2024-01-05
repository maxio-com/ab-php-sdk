<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

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
            ->createPaymentProfile($this->testData->getCreatePaymentProfileRequest($customer->getId()))
            ->getPaymentProfile();

        $this->assertions->assertPaymentProfileCreated(
            $this->testData->getExpectedPaymentProfile($paymentProfile->getId(), $customer->getId()),
            $paymentProfile
        );

        $this->cleaner->removeUnusedPaymentProfileById($paymentProfile->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\PaymentProfilesController::listPaymentProfiles
     */
    public function test_ListPaymentProfiles_ShouldReturnEmptyList_WhenCustomerDoesNotHaveAnyPaymentProfile(): void
    {
        $customer = $this->testData->loadCustomer();

        $paymentProfiles = $this->client
            ->getPaymentProfilesController()
            ->listPaymentProfiles($this->testData->getListRequestParams($customer->getId()));

        $this->assertions->assertNoPaymentProfilesFound($paymentProfiles);

        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\PaymentProfilesController::listPaymentProfiles
     */
    public function test_ListPaymentProfiles_ShouldReturnListWithPaymentProfiles_WhenCustomerHasOneProfile(): void
    {
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());

        $paymentProfiles = $this->client
            ->getPaymentProfilesController()
            ->listPaymentProfiles($this->testData->getListRequestParams($customer->getId()));

        $this->assertions->assertPaymentProfilesFound($paymentProfiles, $paymentProfile);

        $this->cleaner->removeUnusedPaymentProfileById($paymentProfile->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\PaymentProfilesController::readPaymentProfile
     */
    public function test_ReadPaymentProfile_ShouldReturnPaymentProfile_WhenPaymentProfileExists(): void
    {
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());

        $foundPaymentProfile = $this->client
            ->getPaymentProfilesController()
            ->readPaymentProfile((string) $paymentProfile->getId())
            ->getPaymentProfile();

        $this->assertions->assertPaymentProfileFound($foundPaymentProfile, $paymentProfile);

        $this->cleaner->removeUnusedPaymentProfileById($paymentProfile->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\PaymentProfilesController::updatePaymentProfile
     */
    public function test_UpdatePaymentProfile_ShouldUpdatePaymentProfile_WhenNewValuesAreCorrect(): void
    {
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());

        $foundPaymentProfile = $this->client
            ->getPaymentProfilesController()
            ->updatePaymentProfile((string) $paymentProfile->getId(), $this->testData->getUpdatePaymentProfileRequest())
            ->getPaymentProfile();

        $this->assertions->assertPaymentProfileUpdated($foundPaymentProfile, $paymentProfile);

        $this->cleaner->removeUnusedPaymentProfileById($paymentProfile->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\PaymentProfilesController::deleteUnusedPaymentProfile
     */
    public function test_DeleteUnusedPaymentProfile_ShouldRemoveProfile_WhenProfileWasCreated(): void
    {
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());

        $this->client->getPaymentProfilesController()->deleteUnusedPaymentProfile((string) $paymentProfile->getId());

        $this->assertions->assertNoPaymentProfilesFound(
            $this->client->getPaymentProfilesController()->listPaymentProfiles(
                $this->testData->getListRequestParams($customer->getId())
            )
        );

        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\PaymentProfilesController::deleteSubscriptionsPaymentProfile
     */
    public function test_DeleteSubscriptionPaymentProfile_ShouldDeleteProfile_WhenProfileBelongsToSubscription(): void
    {
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());
        $subscription = $this->testData->loadSubscription($customer->getId(), $paymentProfile->getId());

        $this->client->getPaymentProfilesController()->deleteSubscriptionsPaymentProfile(
            $subscription->getId(),
            (string) $paymentProfile->getId()
        );

        $this->assertions->assertNoPaymentProfilesFound(
            $this->client->getPaymentProfilesController()->listPaymentProfiles(
                $this->testData->getListRequestParams($customer->getId())
            )
        );

        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new PaymentProfilesControllerTestData(
            new TestPaymentProfileRequestFactory(),
            new TestCustomerLoader($this->client, new TestCustomerRequestFactory()),
            new TestPaymentProfileLoader($this->client, new TestPaymentProfileRequestFactory()),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory()),
            new TestSubscriptionsLoader($this->client, new TestSubscriptionRequestFactory()),
            new TestProductLoader($this->client, new TestProductRequestFactory())
        );
        $this->assertions = new PaymentProfilesControllerTestAssertions($this);
    }
}
