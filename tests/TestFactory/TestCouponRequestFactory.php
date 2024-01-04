<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateOrUpdateCouponBuilder;
use AdvancedBillingLib\Models\Builders\CreateOrUpdatePercentageCouponBuilder;
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
            ->recurring('false')
            ->stackable('true')
            ->compoundingStrategy(CouponTestData::COMPOUNDING_STRATEGY)
            ->build();
    }
}
