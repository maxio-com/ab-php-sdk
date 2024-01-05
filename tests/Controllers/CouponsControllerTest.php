<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCouponFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;

final class CouponsControllerTest extends TestCase
{
    private CouponsControllerTestData $testData;
    private CouponsControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::createCoupon
     */
    public function test_CreateCoupon_ShouldCreateCoupon_WhenDataAreValid(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'CouponsControllerTest_ProductFamily_1');

        $coupon = $this->client
            ->getCouponsController()
            ->createCoupon(
                $productFamily->getId(),
                $this->testData->getCreateOrUpdatePercentageCouponRequest((string) $productFamily->getId())
            )
            ->getCoupon();

        $this->assertions->assertCouponCreated(
            $coupon,
            $this->testData->getExpectedCoupon(
                $coupon->getId(),
                $productFamily->getId(),
                $productFamily->getName(),
                $coupon->getCreatedAt(),
                $coupon->getUpdatedAt(),
                $coupon->getStartDate()
            )
        );
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new CouponsControllerTestData(
            new TestCouponRequestFactory(),
            new TestCouponFactory(),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory())
        );
        $this->assertions = new CouponsControllerTestAssertions($this);
    }
}
