<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CouponResponse;
use AdvancedBillingLib\Models\CouponSubcodesResponse;
use AdvancedBillingLib\Tests\TestStatusCode;

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

    public function assertCouponFound(?Coupon $foundCoupon, Coupon $coupon): void
    {
        $this->testCase::assertNotNull($foundCoupon);

        $this->testCase::assertEquals($coupon, $foundCoupon);
    }

    public function assertCouponNotFound(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::NOT_FOUND);
    }

    public function assertCouponUpdated(
        ?Coupon $updatedCoupon,
        Coupon $coupon,
        string $updatedName,
        string $updatedCode,
        string $updatedPercentage
    ): void
    {
        $this->testCase::assertNotNull($updatedCoupon);
        $this->testCase::assertNotEquals($updatedCoupon, $coupon);
        $this->testCase::assertEquals($updatedName, $updatedCoupon->getName());
        $this->testCase::assertEquals($updatedCode, $updatedCoupon->getCode());
        $this->testCase::assertEquals($updatedPercentage, $updatedCoupon->getPercentage());
    }

    public function assertCouponCannotBeUpdated(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNPROCESSABLE_CONTENT);
    }

    public function assertCouponArchived(?Coupon $archivedCoupon): void
    {
        $this->testCase::assertNotNull($archivedCoupon);
        $this->testCase::assertNotNull($archivedCoupon->getArchivedAt());
    }

    /**
     * @param array<int, CouponResponse> $list
     */
    public function assertNotEmptyCouponsListReturned(array $list): void
    {
        $this->testCase::assertNotEmpty($list);
    }

    /**
     * @param array<int, CouponResponse> $list
     */
    public function assertEmptyCouponsListReturned(array $list): void
    {
        $this->testCase::assertEmpty($list);
    }

    /**
     * @param array<int, CouponResponse> $list
     */
    public function assertListWithOneCouponReturned(array $list): void
    {
        $this->testCase::assertCount(1, $list);
    }

    /**
     * @param array<int, string> $subCodes
     */
    public function assertSubCodesCreated(CouponSubcodesResponse $response, array $subCodes): void
    {
        $this->testCase::assertEquals($subCodes, $response->getCreatedCodes());
    }
}
