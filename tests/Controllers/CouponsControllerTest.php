<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\DataLoader\TestCouponLoader;
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
                $this->testData->getCouponRequest((string) $productFamily->getId())
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

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::findCoupon
     */
    public function test_FindCoupon_ShouldReturnCoupon_WhenCouponExists(): void
    {
        $coupon = $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_2',
            couponCode: 'CouponsControllerTest_CouponCode_1'
        );

        $foundCoupon = $this->client
            ->getCouponsController()
            ->findCoupon($coupon->getProductFamilyId(), $coupon->getCode())
            ->getCoupon();

        $this->assertions->assertCouponFound($foundCoupon, $coupon);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::findCoupon
     */
    public function test_FindCoupon_ShouldThrowExceptionWith404StatusCode_WhenCouponDoesNotExists(): void
    {
        $productFamily = $this->testData->loadProductFamily('CouponsControllerTest_ProductFamily_3');

        $this->assertions->assertCouponNotFound();
        $this->client
            ->getCouponsController()
            ->findCoupon($productFamily->getId(), $this->testData->getNotExistingCouponCode())
            ->getCoupon();
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::readCoupon
     */
    public function test_ReadCoupon_ShouldReturnCoupon_WhenCouponExists(): void
    {
        $coupon = $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_4',
            couponCode: 'CouponsControllerTest_CouponCode_2'
        );

        $foundCoupon = $this->client
            ->getCouponsController()
            ->readCoupon($coupon->getProductFamilyId(), $coupon->getId())
            ->getCoupon();

        $this->assertions->assertCouponFound($foundCoupon, $coupon);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::findCoupon
     */
    public function test_ReadCoupon_ShouldThrowExceptionWith404StatusCode_WhenCouponDoesNotExists(): void
    {
        $productFamily = $this->testData->loadProductFamily('CouponsControllerTest_ProductFamily_5');

        $this->assertions->assertCouponNotFound();
        $this->client
            ->getCouponsController()
            ->readCoupon($productFamily->getId(), $this->testData->getNotExistingCouponId())
            ->getCoupon();
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::updateCoupon
     */
    public function test_UpdateCoupon_ShouldUpdateCoupon_WhenNewProvidedDataAreCorrect(): void
    {
        $coupon = $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_6',
            couponCode: 'CouponsControllerTest_CouponCode_3'
        );
        $updatedName = 'updated coupon name 1';
        $updatedCode = 'UPDATED_COUPON_CODE_1';
        $updatedPercentage = '25.0';

        $response = $this->client
            ->getCouponsController()
            ->updateCoupon(
                $coupon->getProductFamilyId(),
                $coupon->getId(),
                $this->testData->getUpdatePercentageCouponRequest(
                    (string) $coupon->getProductFamilyId(),
                    $updatedName,
                    $updatedCode,
                    $updatedPercentage
                )
            )
            ->getCoupon();

        $this->assertions->assertCouponUpdated($response, $coupon, $updatedName, $updatedCode, $updatedPercentage);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::updateCoupon
     */
    public function test_UpdateCoupon_ShouldThrowExceptionWith404StatusCode_WhenCouponNotFound(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'CouponsControllerTest_ProductFamily_7');
        $updatedName = 'updated coupon name 2';
        $updatedCode = 'UPDATED_COUPON_CODE_2';
        $updatedPercentage = '25';

        $this->assertions->assertCouponNotFound();
        $this->client
            ->getCouponsController()
            ->updateCoupon(
                $productFamily->getId(),
                $this->testData->getNotExistingCouponId(),
                $this->testData->getUpdatePercentageCouponRequest(
                    (string) $productFamily->getId(),
                    $updatedName,
                    $updatedCode,
                    $updatedPercentage
                )
            )
            ->getCoupon();
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::updateCoupon
     */
    public function test_UpdateCoupon_ShouldThrowExceptionWith422StatusCode_WhenNegativePercentageProvided(): void
    {
        $coupon = $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_8',
            couponCode: 'CouponsControllerTest_CouponCode_4'
        );
        $updatedName = 'updated coupon name 2';
        $updatedCode = 'UPDATED_COUPON_CODE_2';
        $updatedPercentage = '-25';

        $this->assertions->assertCouponCannotBeUpdated();
        $this->client
            ->getCouponsController()
            ->updateCoupon(
                $coupon->getProductFamilyId(),
                $coupon->getId(),
                $this->testData->getUpdatePercentageCouponRequest(
                    (string) $coupon->getProductFamilyId(),
                    $updatedName,
                    $updatedCode,
                    $updatedPercentage
                )
            )
            ->getCoupon();
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::archiveCoupon
     */
    public function test_ArchiveCoupon_ShouldArchiveCoupon_WhenCouponExists(): void
    {
        $coupon = $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_9',
            couponCode: 'CouponsControllerTest_CouponCode_5'
        );

        $response = $this->client
            ->getCouponsController()
            ->archiveCoupon($coupon->getProductFamilyId(), $coupon->getId())
            ->getCoupon();

        $this->assertions->assertCouponArchived($response);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::archiveCoupon
     */
    public function test_ArchiveCoupon_ShouldThrowExceptionWith404StatusCode_WhenCouponNotFound(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'CouponsControllerTest_ProductFamily_10');

        $this->assertions->assertCouponNotFound();
        $this->client
            ->getCouponsController()
            ->archiveCoupon($productFamily->getId(), $this->testData->getNotExistingCouponId())
            ->getCoupon();
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::listCoupons
     */
    public function test_ListCoupons_ShouldReturnNonEmptyList_WhenCouponsExists(): void
    {
        $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_11',
            couponCode: 'CouponsControllerTest_CouponCode_6'
        );

        $response = $this->client
            ->getCouponsController()
            ->listCoupons(options: []);

        $this->assertions->assertNotEmptyCouponsListReturned($response);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::listCoupons
     */
    public function test_ListCoupons_ShouldReturnEmptyList_WhenCouponsDoesNotMeetFilters(): void
    {
        $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_12',
            couponCode: 'CouponsControllerTest_CouponCode_7'
        );

        $response = $this->client
            ->getCouponsController()
            ->listCoupons($this->testData->getFilterOptionsWithNotExistingId());

        $this->assertions->assertEmptyCouponsListReturned($response);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::listCouponsForProductFamily
     */
    public function test_ListCouponsForProductFamily_ShouldReturnListWithOneCoupon_WhenProductFamilyHasOneConnectedCoupon(): void
    {
        $coupon = $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_13',
            couponCode: 'CouponsControllerTest_CouponCode_8'
        );

        $response = $this->client
            ->getCouponsController()
            ->listCouponsForProductFamily(
                [
                    'productFamilyId' => $coupon->getProductFamilyId()
                ]
            );

        $this->assertions->assertListWithOneCouponReturned($response);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::listCouponsForProductFamily
     */
    public function test_ListCouponsForProductFamily_ShouldReturnEmptyList_WhenProductFamilyDoesNotHaveCoupons(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'CouponsControllerTest_ProductFamily_14');

        $response = $this->client
            ->getCouponsController()
            ->listCouponsForProductFamily(
                [
                    'productFamilyId' => $productFamily->getId()
                ]
            );

        $this->assertions->assertEmptyCouponsListReturned($response);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::createCouponSubcodes
     */
    public function test_CreateCouponSubcodes_ShouldReturnCreatedSubCode_WhenSubCodeCreatedSuccessfully(): void
    {
        $coupon = $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_15',
            couponCode: 'CouponsControllerTest_CouponCode_9'
        );
        $subCodes = ['COUPONSCONTROLLERTEST_COUPONSUBCODE_1'];

        $response = $this->client
            ->getCouponsController()
            ->createCouponSubcodes(
                $coupon->getId(),
                $this->testData->getCreateCouponSubCodesRequest($subCodes)
            );

        $this->assertions->assertSubCodesCreated($response, $subCodes);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CouponsController::createCouponSubcodes
     */
    public function test_CreateCouponSubcodes_ShouldThrowExceptionWith404StatusCode_WhenCouponNotFound(): void
    {
        $this->testData->loadCoupon(
            productFamilyName: 'CouponsControllerTest_ProductFamily_16',
            couponCode: 'CouponsControllerTest_CouponCode_10'
        );
        $subCodes = ['COUPONSCONTROLLERTEST_COUPONSUBCODE_2'];

        $this->assertions->assertCouponNotFound();
        $this->client
            ->getCouponsController()
            ->createCouponSubcodes(
                $this->testData->getNotExistingCouponId(),
                $this->testData->getCreateCouponSubCodesRequest($subCodes)
            );
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new CouponsControllerTestData(
            new TestCouponRequestFactory(),
            new TestCouponFactory(),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory()),
            new TestCouponLoader($this->client, new TestCouponRequestFactory())
        );
        $this->assertions = new CouponsControllerTestAssertions($this);
    }
}
