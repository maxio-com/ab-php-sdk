<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CouponPayloadBuilder;
use AdvancedBillingLib\Models\Builders\CouponRequestBuilder;
use AdvancedBillingLib\Models\Builders\CouponSubcodesBuilder;
use AdvancedBillingLib\Models\CouponRequest;
use AdvancedBillingLib\Models\CouponSubcodes;
use AdvancedBillingLib\Tests\TestData\CouponTestData;

final class TestCouponRequestFactory
{
    public function createPercentageCouponRequest(
        string $productFamilyId,
        string $couponCode
    ): CouponRequest
    {
        return CouponRequestBuilder::init()
            ->coupon(CouponPayloadBuilder::init()
                ->name(CouponTestData::NAME)
                ->code($couponCode)
                ->percentage(CouponTestData::PERCENTAGE)
                ->productFamilyId($productFamilyId)
                ->description(CouponTestData::DESCRIPTION)
                ->recurring(false)
                ->stackable(true)
                ->compoundingStrategy(CouponTestData::COMPOUNDING_STRATEGY)
                ->build())
            ->build();
    }

    public function createCouponRequestWithCustomValues(
        string $productFamilyId,
        string $name,
        string $code,
        string $percentage
    ): CouponRequest
    {
        return CouponRequestBuilder::init()
            ->coupon(
                CouponPayloadBuilder::init()
                    ->name($name)
                    ->code($code)
                    ->percentage($percentage)
                    ->productFamilyId($productFamilyId)
                    ->description(CouponTestData::DESCRIPTION)
                    ->recurring(false)
                    ->stackable(true)
                    ->compoundingStrategy(CouponTestData::COMPOUNDING_STRATEGY)
                    ->build()
            )
            ->build();
    }

    /**
     * @param array<int, string> $subCodes
     */
    public function createCouponSubCodesRequest(array $subCodes): CouponSubcodes
    {
        return CouponSubcodesBuilder::init()
            ->codes($subCodes)
            ->build();
    }
}
