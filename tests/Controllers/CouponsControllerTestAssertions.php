<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Coupon;

final class CouponsControllerTestAssertions
{
    public function __construct(private CouponsControllerTest $testCase)
    {
    }

    public function assertCouponCreated(?Coupon $coupon, Coupon $expectedCoupon): void
    {
        $this->testCase::assertNotNull($coupon);
        $this->testCase::assertEquals($expectedCoupon, $coupon);
    }
}
