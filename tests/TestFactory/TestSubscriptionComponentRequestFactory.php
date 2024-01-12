<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateAllocationBuilder;
use AdvancedBillingLib\Models\Builders\PreviewAllocationsRequestBuilder;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\CreateAllocation;
use AdvancedBillingLib\Models\PreviewAllocationsRequest;
use AdvancedBillingLib\Tests\TestData\AllocationTestData;

final class TestSubscriptionComponentRequestFactory
{
    /**
     * @param array<int, Component> $components
     */
    public function createPreviewAllocationRequest(array $components): PreviewAllocationsRequest
    {
        return PreviewAllocationsRequestBuilder::init($this->createCreateAllocations($components))
            ->build();
    }

    /**
     * @param array<int, Component> $components
     * @return array<int, CreateAllocation>
     */
    private function createCreateAllocations(array $components): array
    {
        return array_map(
            static fn(Component $component): CreateAllocation => CreateAllocationBuilder::init(
                AllocationTestData::QUANTITY
            )
                ->componentId($component->getId())
                ->memo(AllocationTestData::MEMO)
                ->build(),
            $components
        );
    }
}
