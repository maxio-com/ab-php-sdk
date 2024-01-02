<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Subscription;

final class SubscriptionsControllerTestAssertions
{
    public function __construct(private SubscriptionsControllerTest $testCase)
    {
    }

    public function assertExpectedSubscriptionReturned(
        Subscription $expectedSubscription,
        ?Subscription $subscription
    ): void
    {
        $this->testCase::assertNotNull($subscription);

        $expectedSubscriptionJson = $expectedSubscription->jsonSerialize();
        $subscriptionJson = $subscription->jsonSerialize();

        // Removed because of modifying value on read.
        unset($expectedSubscriptionJson['updated_at']);
        unset($subscriptionJson['updated_at']);

        $this->testCase::assertEquals($expectedSubscriptionJson, $subscriptionJson);
    }

    public function assertCreatedSubscriptionHasExpectedData(
        Subscription $expectedSubscription,
        ?Subscription $subscription
    ): void
    {
        $this->testCase::assertNotNull($subscription);
        $this->testCase::assertEquals($expectedSubscription, $subscription);
    }
}
