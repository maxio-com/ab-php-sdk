<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestStatusCode;

final class SubscriptionsControllerTestAssertions
{
    public function __construct(private SubscriptionsControllerTest $testCase)
    {
    }

    public function assertExpectedSubscriptionReturned(
        Subscription $expectedSubscription,
        ?Subscription $subscription
    ): void {
        $this->testCase::assertNotNull($subscription);
        $this->testCase::assertEquals($expectedSubscription->jsonSerialize(), $subscription->jsonSerialize());
    }

    public function assertCreatedSubscriptionHasExpectedData(?Subscription $subscription): void
    {
        $this->testCase::assertNotNull($subscription);
    }

    public function assertExceptionWasThrownWithStatus422(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNPROCESSABLE_CONTENT);
    }
}
