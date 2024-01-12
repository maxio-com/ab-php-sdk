<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\PreviewAllocationsRequest;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\DataLoader\TestComponentLoader;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestData\ComponentTestData;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionComponentRequestFactory;

final class SubscriptionComponentsControllerTestData
{
    public function __construct(
        private TestComponentLoader $componentLoader,
        private TestProductFamilyLoader $productFamilyLoader,
        private TestSubscriptionsLoader $subscriptionsLoader,
        private TestCustomerLoader $customerLoader,
        private TestProductLoader $productLoader,
        private TestPaymentProfileLoader $paymentProfileLoader,
        private TestSubscriptionComponentRequestFactory $subscriptionComponentRequestFactory
    )
    {
    }

    public function loadQuantityBasedComponent(int $productFamilyId, string $name): Component
    {
        return $this->componentLoader->loadQuantityBasedComponentWithAllowedFractionalQuantitiesAndCustomPricePoint(
            $productFamilyId,
            $name,
            ComponentTestData::UNIT_NAME,
            ComponentTestData::PRICING_SCHEME
        );
    }

    public function loadProductFamily(string $name): ProductFamily
    {
        return $this->productFamilyLoader->load($name);
    }

    public function loadOnOffComponent(int $productFamilyId, string $name): Component
    {
        return $this->componentLoader->loadOnOffComponentWithAllowedFractionalQuantitiesAndCustomPricePoint(
            $productFamilyId,
            $name
        );
    }

    public function loadSubscription(
        int $productId,
        Component $quantityBasedComponent,
        Component $onOffComponent
    ): Subscription
    {
        $customer = $this->customerLoader->loadSimpleCustomerWithPredefinedData();
        $paymentProfile = $this->paymentProfileLoader->load($customer->getId());

        return $this->subscriptionsLoader->loadWithComponents(
            $customer->getId(),
            $productId,
            $paymentProfile->getId(),
            [$quantityBasedComponent, $onOffComponent]
        );
    }

    public function loadProduct(string $name, string $handle, int $productFamilyId): Product
    {
        return $this->productLoader->load($name, $handle, $productFamilyId);
    }

    /**
     * @param array<int, Component> $components
     */
    public function getPreviewAllocationsRequest(array $components): PreviewAllocationsRequest
    {
        return $this->subscriptionComponentRequestFactory->createPreviewAllocationRequest($components);
    }
}
