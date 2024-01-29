<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Tests\TestFactory\TestComponentRequestFactory;

final class TestComponentLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestComponentRequestFactory $componentRequestFactory
    )
    {
    }

    public function loadQuantityBasedComponent(
        int $productFamilyId,
        string $name,
        string $unitName,
        string $pricingScheme
    ): Component
    {
        return $this->client
            ->getComponentsController()
            ->createQuantityBasedComponent(
                $productFamilyId,
                $this->componentRequestFactory->createCreateQuantityBasedComponent($name, $unitName, $pricingScheme)
            )
            ->getComponent();
    }

    public function loadQuantityBasedComponentWithAllowedFractionalQuantitiesAndCustomPricePoint(
        int $productFamilyId,
        string $name,
        string $unitName,
        string $pricingScheme
    ): Component
    {
        return $this->client
            ->getComponentsController()
            ->createQuantityBasedComponent(
                $productFamilyId,
                $this->componentRequestFactory->createCreateQuantityBasedComponent(
                    $name,
                    $unitName,
                    $pricingScheme
                )
            )
            ->getComponent();
    }

    public function loadOnOffComponent(int $productFamilyId, string $name): Component
    {
        return $this->client
            ->getComponentsController()
            ->createOnOffComponent(
                $productFamilyId,
                $this->componentRequestFactory->createCreateOnOffComponent($name)
            )
            ->getComponent();
    }

    public function loadOnOffComponentWithAllowedFractionalQuantitiesAndCustomPricePoint(
        int $productFamilyId,
        string $name
    ): Component
    {
        return $this->client
            ->getComponentsController()
            ->createOnOffComponent(
                $productFamilyId,
                $this->componentRequestFactory->createCreateOnOffComponentWithAllowedFractionalQuantitiesAndCustomPricePoint($name)
            )
            ->getComponent();
    }
}
