<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

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
    public function test_CreateComponent_ShouldCreateComponent_WhenAllDataAreCorrect(): void
    {
        $productFamily = $this->testData->loadProductFamily();

        $component = $this->client
            ->getComponentsController()
            ->createComponent(
                $productFamily->getId(),
                $this->testData->getComponentKindPath(),
                $this->testData->getCreateQuantityBasedComponentRequest()
            )
            ->getComponent();

        $this->assertions->assertComponentCreated(
            $component,
            $this->testData->getExpectedComponent(
                $component->getId(),
                $component->getDefaultPricePointId(),
                $component->getPrices()[0]->getId(),
                $productFamily,
                $component->getPricePointsUrl(),
                $component->getDefaultPricePointName(),
                $component->getCreatedAt(),
                $component->getUpdatedAt()
            )
        );
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new ComponentsControllerTestData(
            $this->client,
            new TestProductFamilyRequestFactory(),
            new TestComponentRequestFactory(),
            new TestComponentFactory()
        );
        $this->assertions = new ComponentsControllerTestAssertions($this);
    }
}
