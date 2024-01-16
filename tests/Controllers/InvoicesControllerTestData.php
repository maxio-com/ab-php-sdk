<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateInvoiceRequest;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestFactory\TestInvoiceRequestFactory;

final class InvoicesControllerTestData
{
    public function __construct(
        private TestSubscriptionsLoader $subscriptionsLoader,
        private TestProductFamilyLoader $productFamilyLoader,
        private TestProductLoader $productLoader,
        private TestCustomerLoader $customerLoader,
        private TestPaymentProfileLoader $paymentProfileLoader,
        private TestInvoiceRequestFactory $invoiceRequestFactory
    )
    {
    }

    public function loadSubscription(
        string $productFamilyName,
        string $productName,
        string $productHandle,
    ): Subscription
    {
        $productFamily = $this->productFamilyLoader->load($productFamilyName);
        $product = $this->productLoader->load($productName, $productHandle, $productFamily->getId());
        $customer = $this->customerLoader->loadSimpleCustomerWithPredefinedData();
        $paymentProfile = $this->paymentProfileLoader->load($customer->getId());

        return $this->subscriptionsLoader->load($customer->getId(), $product->getId(), $paymentProfile->getId());
    }

    public function getCreateInvoiceRequest(): CreateInvoiceRequest
    {
        return $this->invoiceRequestFactory->createCreateInvoiceRequest();
    }
}
