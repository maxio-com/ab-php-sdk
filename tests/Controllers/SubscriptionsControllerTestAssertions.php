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
        $this->testCase::assertEquals($expectedSubscription->jsonSerialize(), $subscription->jsonSerialize());
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
