<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Models\SubscriptionResponse;
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
        $expectedSubscription->getCustomer()->unsetDefaultAutoRenewalProfileId();

        $this->testCase::assertEquals($expectedSubscriptionJson, $subscriptionJson);
    }

    public function assertCreatedSubscriptionHasExpectedData(
        Subscription $expectedSubscription,
        ?Subscription $subscription
    ): void
    {
        // in customer api its null but here its unavailable
        $expectedSubscription->getCustomer()->unsetDefaultAutoRenewalProfileId();
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

    public function assertSubscriptionCannotBeCreatedBecauseCustomerNotFound(ApiException $exception): void
    {
        $this->testCase::assertInstanceOf(ErrorListResponseException::class, $exception);
        $this->testCase::assertEquals(TestStatusCode::UNPROCESSABLE_CONTENT, $exception->getCode());
        $this->testCase::assertCount(1, $exception->getErrors());
        $this->testCase::assertEquals(
            'A Customer must be specified for the subscription to be valid.',
            $exception->getErrors()[0]
        );
    }

    public function assertSubscriptionWithCouponsCreated(?Subscription $subscription): void
    {
        $this->testCase::assertNotNull($subscription);
        $this->testCase::assertNotNull($subscription->getCoupons());
        $this->testCase::assertCount(2, $subscription->getCoupons());
    }

    /**
     * @param array<int, SubscriptionResponse> $results
     */
    public function assertSubscriptionFoundByMetadata(array $results, Subscription $expectedSubscription): void
    {
        $this->testCase::assertNotEmpty($results);
        $this->testCase::assertCount(1, $results);

        $foundSubscription = $results[0]->getSubscription();
        $this->testCase::assertEquals($foundSubscription->getId(), $expectedSubscription->getId());
    }

    /**
     * @param array<int, SubscriptionResponse> $results
     */
    public function assertSubscriptionNotFoundByMetadata(array $results): void
    {
        $this->testCase::assertEmpty($results);
    }
}
