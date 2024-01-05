<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\Coupon;
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

    /**
     * @param array<int, Coupon> $coupons
     */
    public function assertReturnedSubscriptionWithPriceAffectedByCoupons(
        ?Subscription $subscription,
        array $coupons
    ): void
    {
        $this->testCase::assertNotNull($subscription);

        $couponCodes = array_map(static fn(Coupon $coupon): string => $coupon->getCode(), $coupons);
        $this->testCase::assertEquals($subscription->getCouponCodes(), $couponCodes);
    }

    public function assertSubscriptionWithProratedCalendarBillingCreated(
        ?Subscription $subscription,
        int $snapDay
    ): void
    {
        $this->testCase::assertNotNull($subscription);
        $this->testCase::assertEquals($snapDay, $subscription->getSnapDay());
    }

    public function assertSubscriptionCannotBeCreatedByUnauthorizedUser(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNAUTHORIZED);
    }
}
