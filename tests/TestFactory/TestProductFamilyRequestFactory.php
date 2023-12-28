<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateProductFamilyBuilder;
use AdvancedBillingLib\Models\Builders\CreateProductFamilyRequestBuilder;
use AdvancedBillingLib\Models\CreateProductFamily;
use AdvancedBillingLib\Models\CreateProductFamilyRequest;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;

final class TestProductFamilyRequestFactory
{
    public function create(string $name): CreateProductFamilyRequest
    {
        return CreateProductFamilyRequestBuilder::init($this->createCreateProductFamily($name))
            ->build();
    }

    private function createCreateProductFamily(string $name): CreateProductFamily
    {
        return CreateProductFamilyBuilder::init()
            ->name($name)
            ->description(ProductFamilyTestData::DESCRIPTION)
            ->build();
    }
}
