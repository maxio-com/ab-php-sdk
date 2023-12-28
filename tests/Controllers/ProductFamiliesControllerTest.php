<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyResponseFactory;

final class ProductFamiliesControllerTest extends TestCase
{
    private ProductFamiliesControllerTestData $testData;
    private ProductFamiliesControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\ProductFamiliesController::createProductFamily
     */
    public function test_CreateProductFamily_ShouldCreateProductFamily_WhenAllProvidedDataAreValid(): void
    {
        $request = $this->testData->createRequestOne();

        $productFamily = $this->client
            ->getProductFamiliesController()
            ->createProductFamily($request)
            ->getProductFamily();

        $this->assertions->assertProductFamilyCreated(
            $this->testData->createExpectedProductFamilyOne(
                $productFamily->getId(),
                $productFamily->getCreatedAt(),
                $productFamily->getUpdatedAt(),
            ),
            $productFamily
        );
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\ProductFamiliesController::createProductFamily
     */
    public function test_CreateProductFamily_ShouldThrowExceptionWith422Code_WhenProductFamilyAlreadyExists(): void
    {
        $request = $this->testData->createRequestTwo();

        $this->client
            ->getProductFamiliesController()
            ->createProductFamily($request)
            ->getProductFamily();

        $this->assertions->assertProductFamilyCannotBeCreated();
        $this->client
            ->getProductFamiliesController()
            ->createProductFamily($request)
            ->getProductFamily();
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new ProductFamiliesControllerTestData(
            new TestProductFamilyRequestFactory(),
            new TestProductFamilyFactory(),
            new TestProductFamilyResponseFactory()
        );
        $this->assertions = new ProductFamiliesControllerTestAssertions($this);
    }

//    protected function tearDown(): void
//    {
//        $this->client->getSitesController()->clearSite();
//
//        parent::tearDown();
//    }
}
