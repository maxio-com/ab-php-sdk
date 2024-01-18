<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Tests\DataLoader\TestCouponLoader;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestInvoiceRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;
use DateInterval;
use DateTime;
use DateTimeInterface;

final class InvoicesControllerTest extends TestCase
{
    private InvoicesControllerTestData $testData;
    private InvoicesControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\InvoicesController::createInvoice
     */
    public function test_CreateInvoice_ShouldCreateInvoice_WhenValidSubscriptionIdPassed(): void
    {
        $productFamily = $this->testData->loadProductFamily(
            name: 'InvoicesControllerTest_CreateInvoice_ProductFamily_1'
        );
        $subscription = $this->testData->loadSubscription(
            productFamilyId: $productFamily->getId(),
            productName: 'InvoicesControllerTest CreateInvoice Product 1',
            productHandle: 'invoicescontrollertest-createinvoice-product-1'
        );

        $invoice = $this->client
            ->getInvoicesController()
            ->createInvoice($subscription->getId(), $this->testData->getCreateInvoiceRequest())
            ->getInvoice();

        $this->assertions->assertInvoiceCreated($invoice, $subscription);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\InvoicesController::createInvoice
     */
    public function test_CreateInvoice_ShouldCreateInvoice_WhenCouponAttachedToInvoice(): void
    {
        $productFamily = $this->testData->loadProductFamily('InvoicesControllerTest_CreateInvoice_ProductFamily_2');
        $coupon = $this->testData->loadCoupon($productFamily->getId(), 'InvoicesControllerTest_CreateInvoice_Coupon_1');
        $subscription = $this->testData->loadSubscriptionWithCoupon(
            productFamilyId: $productFamily->getId(),
            productName: 'InvoicesControllerTest CreateInvoice Product 2',
            productHandle: 'invoicescontrollertest-createinvoice-product-2',
            coupon: $coupon
        );

        $invoice = $this->client
            ->getInvoicesController()
            ->createInvoice($subscription->getId(), $this->testData->getCreateInvoiceWithCouponsRequest([$coupon]))
            ->getInvoice();

        $this->assertions->assertInvoiceWithCouponCreated($invoice, $coupon);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\InvoicesController::voidInvoice
     */
    public function test_VoidInvoice_ShouldVoidInvoice_WhenInvoiceExists(): void
    {
        $productFamily = $this->testData->loadProductFamily(
            name: 'InvoicesControllerTest_CreateInvoice_ProductFamily_3'
        );
        $subscription = $this->testData->loadSubscription(
            productFamilyId: $productFamily->getId(),
            productName: 'InvoicesControllerTest CreateInvoice Product 3',
            productHandle: 'invoicescontrollertest-createinvoice-product-3'
        );
        $invoice = $this->client
            ->getInvoicesController()
            ->createInvoice($subscription->getId(), $this->testData->getCreateInvoiceRequest())
            ->getInvoice();

        $voidedInvoice = $this->client
            ->getInvoicesController()
            ->voidInvoice($invoice->getUid(), $this->testData->getVoidInvoiceRequest());

        $this->assertions->assertInvoiceVoided($voidedInvoice);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\InvoicesController::listInvoiceEvents
     */
    public function test_ListInvoiceEvents_ShouldReturnListOfEvents_WhenEventsExists(): void
    {
        $paginationLimit = 10;
        $productFamily = $this->testData->loadProductFamily(
            name: 'InvoicesControllerTest_CreateInvoice_ProductFamily_4'
        );
        $subscription = $this->testData->loadSubscription(
            productFamilyId: $productFamily->getId(),
            productName: 'InvoicesControllerTest CreateInvoice Product 4',
            productHandle: 'invoicescontrollertest-createinvoice-product-4'
        );
        $this->client
            ->getInvoicesController()
            ->createInvoice($subscription->getId(), $this->testData->getCreateInvoiceRequest())
            ->getInvoice();

        $response = $this->client
            ->getInvoicesController()
            ->listInvoiceEvents(
                [
                    'event_types' => [InvoiceEventType::VOID_INVOICE, InvoiceEventType::ISSUE_INVOICE],
                    'per_page' => $paginationLimit,
                    'page' => 1,
                    'since_date' => (new DateTime())->sub(DateInterval::createFromDateString('1 day'))
                ]
            )
            ->getEvents();

        $this->assertions->assertResponseReturnedEvents($response, $paginationLimit);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\InvoicesController::listInvoiceEvents
     */
    public function test_ListInvoiceEvents_ShouldReturnFilteredList_WhenFilteredByIssueInvoiceType(): void
    {
        $productFamily = $this->testData->loadProductFamily(
            name: 'InvoicesControllerTest_CreateInvoice_ProductFamily_5'
        );
        $subscription = $this->testData->loadSubscription(
            productFamilyId: $productFamily->getId(),
            productName: 'InvoicesControllerTest CreateInvoice Product 5',
            productHandle: 'invoicescontrollertest-createinvoice-product-5'
        );
        $this->client
            ->getInvoicesController()
            ->createInvoice($subscription->getId(), $this->testData->getCreateInvoiceRequest())
            ->getInvoice();
        sleep(2); # Wait until API register events.

        $response = $this->client
            ->getInvoicesController()
            ->listInvoiceEvents(
                [
                    'eventTypes' => [InvoiceEventType::ISSUE_INVOICE],
                    'sinceDate' => (new DateTime())->sub(DateInterval::createFromDateString('1 day'))->format(
                        DateTimeInterface::RFC1123
                    )
                ]
            )
            ->getEvents();

        $this->assertions->assertReturnedOnlyIssueInvoiceEvents($response);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\InvoicesController::listInvoiceEvents
     */
    public function test_ListInvoiceEvents_ShouldReturnFilteredList_WhenFilteredByVoidInvoiceType(): void
    {
        $productFamily = $this->testData->loadProductFamily(
            name: 'InvoicesControllerTest_CreateInvoice_ProductFamily_6'
        );
        $subscription = $this->testData->loadSubscription(
            productFamilyId: $productFamily->getId(),
            productName: 'InvoicesControllerTest CreateInvoice Product 6',
            productHandle: 'invoicescontrollertest-createinvoice-product-6'
        );
        $invoice = $this->client
            ->getInvoicesController()
            ->createInvoice($subscription->getId(), $this->testData->getCreateInvoiceRequest())
            ->getInvoice();
        $this->client
            ->getInvoicesController()
            ->voidInvoice($invoice->getUid(), $this->testData->getVoidInvoiceRequest());
        sleep(2); # Wait until API register events.

        $response = $this->client
            ->getInvoicesController()
            ->listInvoiceEvents(
                [
                    'eventTypes' => [InvoiceEventType::VOID_INVOICE],
                    'sinceDate' => (new DateTime())->sub(DateInterval::createFromDateString('1 day'))->format(
                        DateTimeInterface::RFC1123
                    )
                ]
            )
            ->getEvents();

        $this->assertions->assertReturnedOnlyVoidInvoiceEvents($response);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\InvoicesController::createInvoice
     */
    public function test_CreateInvoice_ShouldThrowExceptionWith422StatusCode_WhenPeriodRangeEndIsBeforePeriodRangeStart(): void
    {
        $productFamily = $this->testData->loadProductFamily(
            name: 'InvoicesControllerTest_CreateInvoice_ProductFamily_7'
        );
        $subscription = $this->testData->loadSubscription(
            productFamilyId: $productFamily->getId(),
            productName: 'InvoicesControllerTest CreateInvoice Product 7',
            productHandle: 'invoicescontrollertest-createinvoice-product-7'
        );
        try {
            $this->client
                ->getInvoicesController()
                ->createInvoice(
                    $subscription->getId(),
                    $this->testData->getCreateInvoiceRequestWithInvalidPeriodRangeEndValue()
                )
                ->getInvoice();
        } catch (ApiException $e) {
            $this->assertions->assertCannotCreateInvoiceBecauseOfInvalidPeriodRangeEndValue($e);
        }

        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new InvoicesControllerTestData(
            new TestSubscriptionsLoader($this->client, new TestSubscriptionRequestFactory()),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory()),
            new TestProductLoader($this->client, new TestProductRequestFactory()),
            new TestCustomerLoader($this->client, new TestCustomerRequestFactory()),
            new TestPaymentProfileLoader($this->client, new TestPaymentProfileRequestFactory()),
            new TestInvoiceRequestFactory(),
            new TestCouponLoader($this->client, new TestCouponRequestFactory())
        );
        $this->assertions = new InvoicesControllerTestAssertions($this);
    }
}
