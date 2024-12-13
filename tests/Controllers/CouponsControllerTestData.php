<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CouponPayload;
use AdvancedBillingLib\Models\CouponRequest;
use AdvancedBillingLib\Models\CouponSubcodes;
use AdvancedBillingLib\Models\Builders\ListCouponsFilterBuilder;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\DataLoader\TestCouponLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\TestData\CouponTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCouponFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;
use DateTime;

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

    public function getCouponRequest(string $productFamilyId): CouponRequest
    {
        return $this->couponRequestFactory->createPercentageCouponRequest(
            $productFamilyId,
            CouponTestData::CODE_ONE
        );
    }

    public function getExpectedCoupon(
        int $id,
        int $productFamilyId,
        string $productFamilyName,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $startDate
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
    ): CouponRequest
    {
        return $this->couponRequestFactory->createCouponRequestWithCustomValues(
            $productFamilyId,
            $name,
            $code,
            $percentage
        );
    }

    public function getFilterOptionsWithNotExistingId(): array
    {
        return ['filter' => ListCouponsFilterBuilder::init()
                    ->ids([$this->getNotExistingCouponId()])
                    ->build()];
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
