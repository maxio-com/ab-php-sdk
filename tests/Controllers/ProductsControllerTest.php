<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
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
        $productFamily = $this->testData->loadProductFamily($this->testData->getProductFamilyName());

        $product = $this->client
            ->getProductsController()
            ->createProduct(strval($productFamily->getId()), $this->testData->createRequest())
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
        $productFamily = $this->testData->loadProductFamily(name: 'ProductsControllerTest_ProductFamily_2');

        $this->client
            ->getProductsController()
            ->createProduct(strval($productFamily->getId()), $this->testData->createRequest())
            ->getProduct();

        try {
            $this->client
                ->getProductsController()
                ->createProduct(strval($productFamily->getId()), $this->testData->createRequest())
                ->getProduct();
        } catch (ApiException $e) {
            $this->assertions->assertProductCannotBeCreated($e);
        }
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new ProductsControllerTestData(
            new TestProductFactory(new TestProductFamilyFactory()),
            new TestProductRequestFactory(),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory())
        );
        $this->assertions = new ProductsControllerTestAssertions($this);
    }
}
