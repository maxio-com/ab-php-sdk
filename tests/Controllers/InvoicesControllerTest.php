<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

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

final class InvoicesControllerTest extends TestCase
{
    private InvoicesControllerTestData $testData;
    private InvoicesControllerTestAssertions $assertions;

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
