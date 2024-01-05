<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;

final class ProductFamiliesControllerTest extends TestCase
{
    private ProductFamiliesControllerTestData $testData;
    private ProductFamiliesControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\ProductFamiliesController::createProductFamily
     */
    public function test_CreateProductFamily_ShouldCreateProductFamily_WhenAllProvidedDataAreValid(): void
    {
        $request = $this->testData->createRequest($this->testData->getNameOne());

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
        $request = $this->testData->createRequest($this->testData->getNameTwo());

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
        );
        $this->assertions = new ProductFamiliesControllerTestAssertions($this);
    }
}
