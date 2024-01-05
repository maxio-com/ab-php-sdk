<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CreateOrUpdateCoupon;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\TestData\CouponTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCouponFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;

final class CouponsControllerTestData
{
    public function __construct(
        private TestCouponRequestFactory $couponRequestFactory,
        private TestCouponFactory $couponFactory,
        private TestProductFamilyLoader $productFamilyLoader
    )
    {
    }

    public function loadProductFamily(string $name): ProductFamily
    {
        return $this->productFamilyLoader->load($name);
    }

    public function getCreateOrUpdatePercentageCouponRequest(string $productFamilyId): CreateOrUpdateCoupon
    {
        return $this->couponRequestFactory->createCreateOrUpdatePercentageCouponRequest(
            $productFamilyId,
            CouponTestData::CODE_ONE
        );
    }

    public function getExpectedCoupon(
        int $id,
        int $productFamilyId,
        string $productFamilyName,
        string $createdAt,
        string $updatedAt,
        string $startDate
    ): Coupon
    {
        return $this->couponFactory->create(
            $id,
            $productFamilyId,
            $productFamilyName,
            $createdAt,
            $updatedAt,
            $startDate
        );
    }
}
