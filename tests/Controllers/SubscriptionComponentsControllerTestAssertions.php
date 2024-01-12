<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\AllocationPreview;
use AdvancedBillingLib\Models\AllocationPreviewItem;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Tests\TestData\AllocationTestData;

final class SubscriptionComponentsControllerTestAssertions
{
    public function __construct(private SubscriptionComponentsControllerTest $testCase)
    {
    }

    public function assertExpectedAllocationReturned(
        AllocationPreview $allocation,
        Component $quantityBasedComponent,
        Component $onOffComponent
    ): void
    {
        $allocations = $allocation->getAllocations();
        $quantityBasedComponentAllocation = $this->findQuantityBasedComponentAllocation(
            $allocations,
            $quantityBasedComponent
        );
        $onOffComponentAllocation = $this->findOnOffComponentAllocation($allocations, $onOffComponent);

        $this->testCase::assertIsInt($quantityBasedComponentAllocation->getQuantity());
        $this->testCase::assertEquals(0, $quantityBasedComponentAllocation->getQuantity());
        $this->testCase::assertEquals(AllocationTestData::MEMO, $quantityBasedComponentAllocation->getMemo());

        $this->testCase::assertIsString($onOffComponentAllocation->getQuantity());
        $this->testCase::assertEquals('0.0', $onOffComponentAllocation->getQuantity());
        $this->testCase::assertEquals(AllocationTestData::MEMO, $onOffComponentAllocation->getMemo());
    }

    /**
     * @param array<int, AllocationPreviewItem> $allocations
     */
    private function findQuantityBasedComponentAllocation(
        array $allocations,
        Component $quantityBasedComponent
    ): AllocationPreviewItem
    {
        if ($allocations[0]->getComponentId() === $quantityBasedComponent->getId()) {
            return $allocations[0];
        }

        return $allocations[1];
    }

    /**
     * @param array<int, AllocationPreviewItem> $allocations
     */
    private function findOnOffComponentAllocation(array $allocations, Component $onOffComponent): AllocationPreviewItem
    {
        if ($allocations[0]->getComponentId() === $onOffComponent->getId()) {
            return $allocations[0];
        }

        return $allocations[1];
    }
}
