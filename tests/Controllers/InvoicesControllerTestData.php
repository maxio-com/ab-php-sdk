<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CreateInvoiceRequest;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\DataLoader\TestCouponLoader;
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
        private TestInvoiceRequestFactory $invoiceRequestFactory,
        private TestCouponLoader $couponLoader
    )
    {
    }

    public function loadSubscription(
        int $productFamilyId,
        string $productName,
        string $productHandle,
    ): Subscription
    {
        $product = $this->productLoader->load($productName, $productHandle, $productFamilyId);
        $customer = $this->customerLoader->loadSimpleCustomerWithPredefinedData();
        $paymentProfile = $this->paymentProfileLoader->load($customer->getId());

        return $this->subscriptionsLoader->load($customer->getId(), $product->getId(), $paymentProfile->getId());
    }

    public function getCreateInvoiceRequest(): CreateInvoiceRequest
    {
        return $this->invoiceRequestFactory->createCreateInvoiceRequest();
    }

    public function loadCoupon(int $productFamilyId, $couponCode): Coupon
    {
        return $this->couponLoader->load($productFamilyId, $couponCode);
    }

    public function loadProductFamily(string $name): ProductFamily
    {
        return $this->productFamilyLoader->load($name);
    }

    public function loadSubscriptionWithCoupon(
        int $productFamilyId,
        string $productName,
        string $productHandle,
        Coupon $coupon
    ): Subscription
    {
        $product = $this->productLoader->load($productName, $productHandle, $productFamilyId);
        $customer = $this->customerLoader->loadSimpleCustomerWithPredefinedData();
        $paymentProfile = $this->paymentProfileLoader->load($customer->getId());

        return $this->subscriptionsLoader->loadWithCoupons($customer->getId(), $product->getId(), $paymentProfile->getId(), [$coupon]);
    }

    /**
     * @param array<int, Coupon> $coupons
     */
    public function getCreateInvoiceWithCouponsRequest(array $coupons): CreateInvoiceRequest
    {
        return $this->invoiceRequestFactory->createCreateInvoiceRequestWithCoupons($coupons);
    }
}
