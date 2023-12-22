<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

final class SubscriptionsControllerTest extends TestCase
{
    private SubscriptionsControllerTestData $testData;
    private SubscriptionsControllerTestAssertions $assertions;
    private SubscriptionsControllerTestCleaner $cleaner;

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldCreateSubscription_WhenExistingCustomerProvided(): void
    {
        $response = $this->client->getSubscriptionsController()->createSubscription(
            $this->testData->getCreateSubscriptionRequest()
        );
        $subscription = $response->getSubscription();

        $this->assertions->assertCreatedSubscriptionHasExpectedData($subscription);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $this->testData->getCustomerId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ThrowExceptionWithStatusCode422_WhenNonExistingCustomerProvided(): void
    {
        $this->assertions->assertExceptionWasThrownWithStatus422();
        $this->client->getSubscriptionsController()->createSubscription(
            $this->testData->getCreateSubscriptionRequestWithNonExistingCustomer()
        );
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::readSubscription
     */
    public function test_ReadSubscription_ShouldReturnSubscription_WhenSubscriptionWithProvidedIdExists(): void
    {
        $response = $this->client->getSubscriptionsController()->readSubscription($this->testData->getSubscriptionId());

        $this->assertions->assertExpectedSubscriptionReturned(
            $this->testData->getExpectedSubscription(),
            $response->getSubscription()
        );
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new SubscriptionsControllerTestData(
            new TestSubscriptionFactory(
                new TestCustomerFactory(),
                new TestProductFactory(),
                new TestPaymentProfileFactory()
            ),
            new TestSubscriptionRequestFactory()
        );
        $this->assertions = new SubscriptionsControllerTestAssertions($this);
        $this->assertions = new SubscriptionsControllerTestAssertions($this);
        $this->cleaner = new SubscriptionsControllerTestCleaner($this->client);
    }
}
