<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestComponentFactory;
use AdvancedBillingLib\Tests\TestFactory\TestComponentRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;

final class ComponentsControllerTest extends TestCase
{
    private ComponentsControllerTestData $testData;
    private ComponentsControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\ComponentsController::createComponent
     */
    public function test_CreateComponent_ShouldCreateQuantityBasedComponent_WhenAllDataAreCorrect(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'ComponentsControllerTest_ProductFamily_1');

        $component = $this->client
            ->getComponentsController()
            ->createQuantityBasedComponent(
                $productFamily->getId(),
                $this->testData->getCreateQuantityBasedComponentRequest()
            )
            ->getComponent();

        $this->assertions->assertQuantityBasedComponentCreated(
            $component,
            $this->testData->getQuantityBasedExpectedComponent(
                $component->getId(),
                $component->getDefaultPricePointId(),
                $component->getPrices()[0]->getId(),
                $productFamily,
                $component->getPricePointsUrl(),
                $component->getDefaultPricePointName(),
                $component->getCreatedAt(),
            )
        );
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\ComponentsController::createComponent
     */
    public function test_CreateComponent_ShouldCreateOnOffComponent_WhenAllDataAreCorrect(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'ComponentsControllerTest_ProductFamily_2');

        $component = $this->client
            ->getComponentsController()
            ->createOnOffComponent(
                $productFamily->getId(),
                $this->testData->getCreateOnOffComponentRequest()
            )
            ->getComponent();

        $this->assertions->assertOnOffComponentCreated(
            $component,
            $this->testData->getExpectedOnOffComponent(
                $component->getId(),
                $component->getDefaultPricePointId(),
                $productFamily,
                $component->getPricePointsUrl(),
                $component->getDefaultPricePointName(),
                $component->getCreatedAt(),
            )
        );
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new ComponentsControllerTestData(
            new TestComponentRequestFactory(),
            new TestComponentFactory(),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory())
        );
        $this->assertions = new ComponentsControllerTestAssertions($this);
    }
}
