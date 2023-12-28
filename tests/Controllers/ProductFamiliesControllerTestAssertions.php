<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\ProductFamilyResponse;
use AdvancedBillingLib\Tests\TestStatusCode;

final class ProductFamiliesControllerTestAssertions
{
    public function __construct(private ProductFamiliesControllerTest $testCase)
    {
    }

    public function assertProductFamilyCreated(
        ProductFamily $expectedProductFamily,
        ?ProductFamily $productFamily
    ): void
    {
        $this->testCase::assertNotNull($productFamily);
        $this->testCase::assertEquals($expectedProductFamily, $productFamily);
    }

    public function assertProductFamilyCannotBeCreated(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNPROCESSABLE_CONTENT);
    }
}
