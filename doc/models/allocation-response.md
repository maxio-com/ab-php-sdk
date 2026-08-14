
# Allocation Response

## Structure

`AllocationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocation` | [`?Allocation`](../../doc/models/allocation.md) | Optional | - | getAllocation(): ?Allocation | setAllocation(?Allocation allocation): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AllocationResponseBuilder;
use AdvancedBillingLib\Models\Builders\AllocationBuilder;

$allocationResponse = AllocationResponseBuilder::init()
    ->allocation(
        AllocationBuilder::init()
            ->allocationId(238)
            ->componentId(8)
            ->componentHandle('component_handle8')
            ->subscriptionId(8)
            ->quantity(
                32
            )
            ->build()
    )
    ->build();
```

