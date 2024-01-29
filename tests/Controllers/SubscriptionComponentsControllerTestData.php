<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\Customer;
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
use AdvancedBillingLib\Tests\TestData\AllocationTestData;
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

    /**
     * @param array<int, Component> $components
     */
    public function loadSubscription(
        int $customerId,
        int $productId,
        array $components
    ): Subscription
    {
        $creditCardPaymentProfile = $this->paymentProfileLoader->loadCreditCard($customerId);

        return $this->subscriptionsLoader->loadWithComponents(
            $customerId,
            $productId,
            $creditCardPaymentProfile->getId(),
            $components
        );
    }

    public function loadCustomer(): Customer
    {
        return $this->customerLoader->loadSimpleCustomerWithPredefinedData();
    }

    public function loadCustomCustomer(
        string $firstName,
        string $lastName,
        string $email,
        string $reference,
        string $vatNumber
    ): Customer
    {
        return $this->customerLoader->loadSimpleCustomerWithCustomData(
            $firstName,
            $lastName,
            $email,
            $reference,
            $vatNumber
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

    /**
     * @param array<int, Component> $components
     */
    public function getPreviewAllocationsRequestWithInvalidComponentQuantity(array $components): PreviewAllocationsRequest
    {
        return $this->subscriptionComponentRequestFactory->createPreviewAllocationRequestWithCustomQuantity(
            $components,
            AllocationTestData::INVALID_ON_OFF_COMPONENT_QUANTITY
        );
    }
}
