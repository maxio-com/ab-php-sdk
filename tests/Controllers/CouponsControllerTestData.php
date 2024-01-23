<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CouponSubcodes;
use AdvancedBillingLib\Models\CreateOrUpdateCoupon;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\DataLoader\TestCouponLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\TestData\CouponTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCouponFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;

final class CouponsControllerTestData
{
    public function __construct(
        private TestCouponRequestFactory $couponRequestFactory,
        private TestCouponFactory $couponFactory,
        private TestProductFamilyLoader $productFamilyLoader,
        private TestCouponLoader $couponLoader
    )
    {
    }

    public function getCreatePercentageCouponRequest(string $productFamilyId): CreateOrUpdateCoupon
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

    public function loadCoupon(string $productFamilyName, string $couponCode): Coupon
    {
        $productFamily = $this->loadProductFamily($productFamilyName);

        return $this->couponLoader->load($productFamily->getId(), $couponCode);
    }

    public function loadProductFamily(string $name): ProductFamily
    {
        return $this->productFamilyLoader->load($name);
    }

    public function getNotExistingCouponCode(): string
    {
        return CouponTestData::NOT_EXISTING_COUPON_CODE;
    }

    public function getUpdatePercentageCouponRequest(
        string $productFamilyId,
        string $name,
        string $code,
        string $percentage
    ): CreateOrUpdateCoupon
    {
        return $this->couponRequestFactory->createCreateOrUpdatePercentageCouponRequestWithCustomValues(
            $productFamilyId,
            $name,
            $code,
            $percentage
        );
    }

    public function getFilterOptionsWithNotExistingId(): array
    {
        return ['filterIds' => [$this->getNotExistingCouponId()]];
    }

    public function getNotExistingCouponId(): int
    {
        return CouponTestData::NOT_EXISTING_COUPON_ID;
    }

    /**
     * @param array<int, string> $subCodes
     */
    public function getCreateCouponSubCodesRequest(array $subCodes): CouponSubcodes
    {
        return $this->couponRequestFactory->createCouponSubCodesRequest($subCodes);
    }
}
