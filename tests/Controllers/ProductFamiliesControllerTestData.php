<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateProductFamilyRequest;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;

final class ProductFamiliesControllerTestData
{
    public function __construct(
        private TestProductFamilyRequestFactory $productFamilyRequestFactory,
        private TestProductFamilyFactory $productFamilyFactory,
    )
    {
    }

    public function createRequestTwo(): CreateProductFamilyRequest
    {
        return $this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_TWO);
    }

    public function createRequestOne(): CreateProductFamilyRequest
    {
        return $this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_ONE);
    }

    public function createExpectedProductFamilyOne(
        int $id,
        string $createdAt,
        string $updatedAt,
    ): ProductFamily
    {
        return $this->productFamilyFactory->create(
            $id,
            $createdAt,
            $updatedAt,
            ProductFamilyTestData::NAME_ONE,
            ProductFamilyTestData::HANDLE_ONE
        );
    }
}
