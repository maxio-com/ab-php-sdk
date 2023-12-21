<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionFactory;

final class SubscriptionsControllerTest extends TestCase
{
    private SubscriptionsControllerTestData $testData;
    private SubscriptionsControllerTestAssertions $assertions;

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
            )
        );
        $this->assertions = new SubscriptionsControllerTestAssertions($this);
    }
}
