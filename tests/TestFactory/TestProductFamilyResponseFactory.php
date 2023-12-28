<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\ProductFamilyResponseBuilder;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\ProductFamilyResponse;

final class TestProductFamilyResponseFactory
{
    public function create(ProductFamily $productFamily): ProductFamilyResponse
    {
        return ProductFamilyResponseBuilder::init()
            ->productFamily($productFamily)
            ->build();
    }
}
