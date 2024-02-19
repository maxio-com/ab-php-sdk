<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\ProductFamilyBuilder;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use DateTime;

final class TestProductFamilyFactory
{
    public function create(
        int $id,
        DateTime $createdAt,
        DateTime $updatedAt,
        string $name,
        string $handle
    ): ProductFamily
    {
        return ProductFamilyBuilder::init()
            ->id($id)
            ->createdAt($createdAt)
            ->updatedAt($updatedAt)
            ->name($name)
            ->description(ProductFamilyTestData::DESCRIPTION)
            ->handle($handle)
            ->accountingCode(ProductFamilyTestData::ACCOUNTING_CODE)
            ->build();
    }
}
