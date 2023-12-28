<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateOrUpdateProductBuilder;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateProductRequestBuilder;
use AdvancedBillingLib\Models\CreateOrUpdateProduct;
use AdvancedBillingLib\Models\CreateOrUpdateProductRequest;
use AdvancedBillingLib\Tests\TestData\ProductTestData;

final class TestProductRequestFactory
{
    public function create(string $name, string $handle): CreateOrUpdateProductRequest
    {
        return CreateOrUpdateProductRequestBuilder::init($this->createCreateOrUpdateProduct($name, $handle))
            ->build();
    }

    private function createCreateOrUpdateProduct(string $name, string $handle): CreateOrUpdateProduct
    {
        return CreateOrUpdateProductBuilder::init(
            $name,
            ProductTestData::DESCRIPTION,
            ProductTestData::PRICE_IN_CENTS,
            ProductTestData::INTERVAL,
            ProductTestData::INTERVAL_UNIT
        )
            ->handle($handle)
            ->build();
    }
}
