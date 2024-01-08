<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
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

    public function assertProductCannotBeCreated(ApiException $exception): void
    {
        $this->testCase::assertInstanceOf(ErrorListResponseException::class, $exception);
        $this->testCase::assertEquals(TestStatusCode::UNPROCESSABLE_CONTENT, $exception->getCode());
        $this->testCase::assertCount(1, $exception->getErrors());
        $this->testCase::assertEquals(
            'API Handle: must be unique - \'productscontrollertest-product-1\' has been taken by another Product in this Site.',
            $exception->getErrors()[0]
        );
    }
}
