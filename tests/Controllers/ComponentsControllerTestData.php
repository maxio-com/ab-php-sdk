<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\CreateQuantityBasedComponent;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\TestData\ComponentTestData;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestFactory\TestComponentFactory;
use AdvancedBillingLib\Tests\TestFactory\TestComponentRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;

final class ComponentsControllerTestData
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestProductFamilyRequestFactory $productFamilyRequestFactory,
        private TestComponentRequestFactory $componentRequestFactory,
        private TestComponentFactory $componentFactory
    )
    {
    }

    public function loadProductFamily(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily($this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_NINE))
            ->getProductFamily();
    }

    public function getComponentKindPath(): string
    {
        return ComponentTestData::QUANTITY_BASED_COMPONENT_KIND_PATH;
    }

    public function getExpectedComponent(
        int $id,
        int $defaultPricePointId,
        int $componentPriceId,
        ProductFamily $productFamily,
        string $pricePointUrl,
        string $pricePointName,
        string $createdAt,
        string $updatedAt
    ): Component
    {
        return $this->componentFactory->create(
            $id,
            $defaultPricePointId,
            $componentPriceId,
            $productFamily,
            $pricePointUrl,
            $pricePointName,
            $createdAt,
            $updatedAt
        );
    }

    public function getCreateQuantityBasedComponentRequest(): CreateQuantityBasedComponent
    {
        return $this->componentRequestFactory->createCreateQuantityBasedComponent();
    }
}
