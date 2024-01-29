<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\CreateOnOffComponent;
use AdvancedBillingLib\Models\CreateQuantityBasedComponent;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\TestData\ComponentTestData;
use AdvancedBillingLib\Tests\TestFactory\TestComponentFactory;
use AdvancedBillingLib\Tests\TestFactory\TestComponentRequestFactory;
use DateTime;

final class ComponentsControllerTestData
{
    public function __construct(
        private TestComponentRequestFactory $componentRequestFactory,
        private TestComponentFactory $componentFactory,
        private TestProductFamilyLoader $productFamilyLoader
    )
    {
    }

    public function loadProductFamily(string $name): ProductFamily
    {
        return $this->productFamilyLoader->load($name);
    }

    public function getQuantityBasedExpectedComponent(
        int $id,
        int $defaultPricePointId,
        int $componentPriceId,
        ProductFamily $productFamily,
        string $pricePointUrl,
        string $pricePointName,
        DateTime $createdAt,
    ): Component
    {
        return $this->componentFactory->createQuantityBasedComponent(
            $id,
            $defaultPricePointId,
            $componentPriceId,
            $productFamily,
            $pricePointUrl,
            $pricePointName,
            $createdAt,
        );
    }

    public function getCreateQuantityBasedComponentRequest(): CreateQuantityBasedComponent
    {
        return $this->componentRequestFactory->createCreateQuantityBasedComponent(
            ComponentTestData::NAME,
            ComponentTestData::UNIT_NAME,
            ComponentTestData::PRICING_SCHEME
        );
    }

    public function getCreateOnOffComponentRequest(): CreateOnOffComponent
    {
        return $this->componentRequestFactory->createCreateOnOffComponent(
            ComponentTestData::NAME,
        );
    }

    public function getExpectedOnOffComponent(
        int $id,
        int $defaultPricePointId,
        ProductFamily $productFamily,
        string $pricePointsUrl,
        string $defaultPricePointName,
        DateTime $createdAt
    ): Component
    {
        return $this->componentFactory->createOnOffComponent(
            $id,
            $defaultPricePointId,
            $productFamily,
            $pricePointsUrl,
            $defaultPricePointName,
            $createdAt
        );
    }
}
