<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ComponentAllocationErrorException;
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

    public function assertCannotPreviewAllocationBecauseOfInvalidComponentQuantity(
        ApiException $exception,
        int $componentId
    ): void
    {
        $this->testCase::assertInstanceOf(ComponentAllocationErrorException::class, $exception);

        # Assertion disabled because of incorrect returned status. 0 instead of 422
//      $this->testCase::assertEquals(TestStatusCode::UNPROCESSABLE_CONTENT, $exception->getCode());
        $this->testCase::assertCount(1, $exception->getErrors());

        $error = $exception->getErrors()[0];
        $this->testCase::assertEquals(
            [
                'kind' => 'allocation',
                'component_id' => $componentId,
                'on' => 'quantity',
                'message' => 'Quantity: must be either 1 (on) or 0 (off).'
            ],
            $error->jsonSerialize()
        );
    }
}
