<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CouponSubcodesBuilder;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateCouponBuilder;
use AdvancedBillingLib\Models\Builders\CreateOrUpdatePercentageCouponBuilder;
use AdvancedBillingLib\Models\CouponSubcodes;
use AdvancedBillingLib\Models\CreateOrUpdateCoupon;
use AdvancedBillingLib\Models\CreateOrUpdatePercentageCoupon;
use AdvancedBillingLib\Tests\TestData\CouponTestData;

final class TestCouponRequestFactory
{
    public function createCreateOrUpdatePercentageCouponRequest(
        string $productFamilyId,
        string $couponCode
    ): CreateOrUpdateCoupon
    {
        return CreateOrUpdateCouponBuilder::init()
            ->coupon($this->createCreateOrUpdatePercentageCoupon($productFamilyId, $couponCode))
            ->build();
    }

    private function createCreateOrUpdatePercentageCoupon(
        string $productFamilyId,
        string $couponCode
    ): CreateOrUpdatePercentageCoupon
    {
        return CreateOrUpdatePercentageCouponBuilder::init(
            CouponTestData::NAME,
            $couponCode,
            CouponTestData::PERCENTAGE
        )
            ->productFamilyId($productFamilyId)
            ->description(CouponTestData::DESCRIPTION)
            ->recurring(false)
            ->stackable(true)
            ->compoundingStrategy(CouponTestData::COMPOUNDING_STRATEGY)
            ->build();
    }

    public function createCreateOrUpdatePercentageCouponRequestWithCustomValues(
        string $productFamilyId,
        string $name,
        string $code,
        string $percentage
    ): CreateOrUpdateCoupon
    {
        return CreateOrUpdateCouponBuilder::init()
            ->coupon(
                $this->createCreateOrUpdatePercentageCouponWithCustomValues($productFamilyId, $name, $code, $percentage)
            )
            ->build();
    }

    private function createCreateOrUpdatePercentageCouponWithCustomValues(
        string $productFamilyId,
        string $name,
        string $code,
        string $percentage
    ): CreateOrUpdatePercentageCoupon
    {
        return CreateOrUpdatePercentageCouponBuilder::init(
            $name,
            $code,
            $percentage
        )
            ->productFamilyId($productFamilyId)
            ->description(CouponTestData::DESCRIPTION)
            ->recurring(false)
            ->stackable(true)
            ->compoundingStrategy(CouponTestData::COMPOUNDING_STRATEGY)
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
