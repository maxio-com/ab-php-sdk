<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CreateOrUpdateCoupon;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\TestData\CouponTestData;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCouponFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;

final class CouponsControllerTestData
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestProductFamilyRequestFactory $productFamilyRequestFactory,
        private TestCouponRequestFactory $couponRequestFactory,
        private TestCouponFactory $couponFactory
    )
    {
    }

    public function loadProductFamily(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily($this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_TEN))
            ->getProductFamily();
    }

    public function getCreateOrUpdatePercentageCouponRequest(string $productFamilyId): CreateOrUpdateCoupon
    {
        return $this->couponRequestFactory->createCreateOrUpdatePercentageCouponRequest($productFamilyId, CouponTestData::CODE_ONE);
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
