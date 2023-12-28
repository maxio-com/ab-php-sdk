<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\CreateOrUpdateProductRequest;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestData\ProductTestData;
use AdvancedBillingLib\Tests\TestFactory\TestProductFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;

final class ProductsControllerTestData
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestProductFamilyRequestFactory $productFamilyRequestFactory,
        private TestProductFactory $productFactory,
        private TestProductRequestFactory $productRequestFactory
    )
    {
    }

    public function loadProductFamily(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily(
                $this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_FOUR)
            )
            ->getProductFamily();
    }

    public function loadProductFamilyTwo(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily(
                $this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_FIVE)
            )
            ->getProductFamily();
    }

    public function getExpectedProduct(
        int $productId,
        string $createdAt,
        string $updatedAt,
        int $productFamilyId,
        string $productFamilyCreatedAt,
        string $productFamilyUpdatedAt,
        int $defaultProductPricePointId,
        int $productPricePointId,
        string $productPricePointHandle
    ): Product
    {
        return $this->productFactory->create(
            $productId,
            $createdAt,
            $updatedAt,
            $productFamilyId,
            $productFamilyCreatedAt,
            $productFamilyUpdatedAt,
            $defaultProductPricePointId,
            $productPricePointId,
            $productPricePointHandle
        );
    }

    public function createRequest(): CreateOrUpdateProductRequest
    {
        return $this->productRequestFactory->create(ProductTestData::NAME_ONE, ProductTestData::HANDLE_ONE);
    }
}
