<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateOrUpdateProductRequest;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\TestFactory\TestProductFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use DateTime;

final class ProductsControllerTestData
{
    public function __construct(
        private TestProductFactory $productFactory,
        private TestProductRequestFactory $productRequestFactory,
        private TestProductFamilyLoader $productFamilyLoader
    )
    {
    }

    public function loadProductFamily(string $name): ProductFamily
    {
        return $this->productFamilyLoader->load($name);
    }

    public function getExpectedProduct(
        int $productId,
        DateTime $createdAt,
        DateTime $updatedAt,
        int $productFamilyId,
        DateTime $productFamilyCreatedAt,
        DateTime $productFamilyUpdatedAt,
        int $defaultProductPricePointId,
        int $productPricePointId,
        string $productPricePointHandle
    ): Product
    {
        return $this->productFactory->create(
            $productId,
            $this->getProductName(),
            $this->getProductHandle(),
            $createdAt,
            $updatedAt,
            $productFamilyId,
            $this->getProductFamilyName(),
            $this->getProductFamilyHandle(),
            $productFamilyCreatedAt,
            $productFamilyUpdatedAt,
            $defaultProductPricePointId,
            $productPricePointId,
            $productPricePointHandle
        );
    }

    private function getProductName(): string
    {
        return 'ProductsControllerTest Product 1';
    }

    private function getProductHandle(): string
    {
        return 'productscontrollertest-product-1';
    }

    public function getProductFamilyName(): string
    {
        return 'ProductsControllerTest_ProductFamily_1';
    }

    public function getProductFamilyHandle(): string
    {
        return 'productscontrollertest_productfamily_1';
    }

    public function createRequest(): CreateOrUpdateProductRequest
    {
        return $this->productRequestFactory->create($this->getProductName(), $this->getProductHandle());
    }
}
