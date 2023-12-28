<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestProductFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;

final class ProductsControllerTest extends TestCase
{
    private ProductsControllerTestData $testData;
    private ProductsControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\ProductsController::createProduct
     */
    public function test_CreateProduct_ShouldCreateProduct_WhenAllProvidedDataAreValid(): void
    {
        $productFamily = $this->testData->loadProductFamily();

        $product = $this->client
            ->getProductsController()
            ->createProduct($productFamily->getId(), $this->testData->createRequest())
            ->getProduct();

        $this->assertions->assertProductCreated(
            $this->testData->getExpectedProduct(
                $product->getId(),
                $product->getCreatedAt(),
                $product->getUpdatedAt(),
                $productFamily->getId(),
                $productFamily->getCreatedAt(),
                $productFamily->getUpdatedAt(),
                $product->getDefaultProductPricePointId(),
                $product->getProductPricePointId(),
                $product->getProductPricePointHandle()
            ),
            $product
        );

        $this->cleaner->archiveProductById($product->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\ProductsController::createProduct
     */
    public function test_CreateProduct_ShouldThrowExceptionWith422Status_WhenProductAlreadyExists(): void
    {
        $productFamily = $this->testData->loadProductFamilyTwo();

        $product = $this->client
            ->getProductsController()
            ->createProduct($productFamily->getId(), $this->testData->createRequest())
            ->getProduct();

        $this->assertions->assertProductCannotBeCreated();
        $this->client
            ->getProductsController()
            ->createProduct($productFamily->getId(), $this->testData->createRequest())
            ->getProduct();

        $this->cleaner->archiveProductById($product->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new ProductsControllerTestData(
            $this->client,
            new TestProductFamilyRequestFactory(),
            new TestProductFactory(new TestProductFamilyFactory()),
            new TestProductRequestFactory()
        );
        $this->assertions = new ProductsControllerTestAssertions($this);
    }
}
