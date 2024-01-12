<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\DataLoader\TestComponentLoader;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestComponentRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionComponentRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

final class SubscriptionComponentsControllerTest extends TestCase
{
    private SubscriptionComponentsControllerTestData $testData;
    private SubscriptionComponentsControllerTestAssertions $assertions;

    public function test_PreviewAllocations_ShouldPreviewAllocation_WhenSubscriptionHasQuantityBasedAndOnOffComponent(): void
    {
        $productFamily = $this->testData->loadProductFamily('SubscriptionComponentsControllerTests_ProductFamily_1');
        $quantityBasedComponent = $this->testData->loadQuantityBasedComponent(
            $productFamily->getId(),
            'SubscriptionComponentsControllerTests_Component_1'
        );
        $onOffComponent = $this->testData->loadOnOffComponent(
            $productFamily->getId(),
            'SubscriptionComponentsControllerTests_Component_2'
        );
        $product = $this->testData->loadProduct(
            'SubscriptionComponentsControllerTests Product 1',
            'subscriptioncomponentscontrollertests-product-1',
            $productFamily->getId()
        );
        $subscription = $this->testData->loadSubscription(
            $product->getId(),
            $quantityBasedComponent,
            $onOffComponent
        );

        $allocation = $this->client
            ->getSubscriptionComponentsController()
            ->previewAllocations(
                $subscription->getId(),
                $this->testData->getPreviewAllocationsRequest([$quantityBasedComponent, $onOffComponent])
            )
            ->getAllocationPreview();

        $this->assertions->assertExpectedAllocationReturned($allocation, $quantityBasedComponent, $onOffComponent);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new SubscriptionComponentsControllerTestData(
            new TestComponentLoader($this->client, new TestComponentRequestFactory()),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory()),
            new TestSubscriptionsLoader($this->client, new TestSubscriptionRequestFactory()),
            new TestCustomerLoader($this->client, new TestCustomerRequestFactory()),
            new TestProductLoader($this->client, new TestProductRequestFactory()),
            new TestPaymentProfileLoader($this->client, new TestPaymentProfileRequestFactory()),
            new TestSubscriptionComponentRequestFactory()
        );
        $this->assertions = new SubscriptionComponentsControllerTestAssertions($this);
    }
}
