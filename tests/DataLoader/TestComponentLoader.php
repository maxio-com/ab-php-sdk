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

    public function loadQuantityBasedComponent(int $productFamilyId, string $componentKindPath): Component
    {
        return $this->client
            ->getComponentsController()
            ->createComponent(
                $productFamilyId,
                $componentKindPath,
                $this->componentRequestFactory->createCreateQuantityBasedComponent()
            )
            ->getComponent();
    }
}
