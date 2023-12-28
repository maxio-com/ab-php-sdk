<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Tests\TestStatusCode;

final class ProductsControllerTestAssertions
{
    public function __construct(private ProductsControllerTest $testCase)
    {
    }

    public function assertProductCreated(Product $expectedProduct, Product $product): void
    {
        $this->testCase::assertEquals($expectedProduct, $product);
    }

    public function assertProductCannotBeCreated(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNPROCESSABLE_CONTENT);
    }
}
