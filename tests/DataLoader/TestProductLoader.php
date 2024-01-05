<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;

final class TestProductLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestProductRequestFactory $productRequestFactory
    )
    {
    }

    public function load(string $name, string $handle, int $productFamilyId): Product
    {
        return $this->client
            ->getProductsController()
            ->createProduct(
                $productFamilyId,
                $this->productRequestFactory->create($name, $handle)
            )
            ->getProduct();
    }
}
