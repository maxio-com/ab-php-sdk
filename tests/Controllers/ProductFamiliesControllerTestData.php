<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateProductFamilyRequest;
use AdvancedBillingLib\Models\ProductFamily;
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

    public function createRequest(string $name): CreateProductFamilyRequest
    {
        return $this->productFamilyRequestFactory->create($name);
    }

    public function createExpectedProductFamilyOne(
        int $id,
        DateTime $createdAt,
        DateTime $updatedAt,
    ): ProductFamily
    {
        return $this->productFamilyFactory->create(
            $id,
            $createdAt,
            $updatedAt,
            $this->getNameOne(),
            $this->getHandleOne()
        );
    }

    public function getNameOne(): string
    {
        return 'ProductFamiliesControllerTest_ProductFamily_1';
    }

    private function getHandleOne(): string
    {
        return 'productfamiliescontrollertest_productfamily_1';
    }

    public function getNameTwo(): string
    {
        return 'ProductFamiliesControllerTest_ProductFamily_2';
    }
}
