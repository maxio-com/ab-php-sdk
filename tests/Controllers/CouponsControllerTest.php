<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCouponFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;

final class CouponsControllerTest extends TestCase
{
    private CouponsControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::createCoupon
     */
    public function test_CreateCoupon_ShouldCreateCoupon_WhenDataAreValid(): void
    {
        $productFamily = $this->testData->loadProductFamily();

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
            $this->client,
            new TestProductFamilyRequestFactory(),
            new TestCouponRequestFactory(),
            new TestCouponFactory()
        );
        $this->assertions = new CouponsControllerTestAssertions($this);
    }
}
