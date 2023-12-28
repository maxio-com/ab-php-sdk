<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateProductFamilyRequest;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\ProductFamilyResponse;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyResponseFactory;

final class ProductFamiliesControllerTestData
{
    public function __construct(
        private TestProductFamilyRequestFactory $productFamilyRequestFactory,
        private TestProductFamilyFactory $productFamilyFactory,
        private TestProductFamilyResponseFactory $productFamilyResponseFactory
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

    public function createRequestThree(): CreateProductFamilyRequest
    {
        return $this->productFamilyRequestFactory->create(
            ProductFamilyTestData::NAME_THREE
        );
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

    /**
     * @return array<string, string>
     */
    public function getEmptyListRequestOptions(): array
    {
        return [];
    }

    /**
     * @return array<int, ProductFamilyResponse>
     */
    public function getExpectedListResponse(ProductFamily $productFamily): array
    {
        return [$this->productFamilyResponseFactory->create($productFamily)];
    }
}
