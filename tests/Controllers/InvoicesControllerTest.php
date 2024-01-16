<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestCase;
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
        $subscription = $this->testData->loadSubscription(
            productFamilyName: 'InvoicesControllerTest_CreateInvoice_ProductFamily_1',
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
        );
        $this->assertions = new InvoicesControllerTestAssertions($this);
    }
}
