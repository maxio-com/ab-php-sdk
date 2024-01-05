<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;

final class TestProductFamilyLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestProductFamilyRequestFactory $productFamilyRequestFactory
    )
    {
    }

    public function load(string $name): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily($this->productFamilyRequestFactory->create($name))
            ->getProductFamily();
    }
}
