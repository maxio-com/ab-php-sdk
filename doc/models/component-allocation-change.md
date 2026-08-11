
# Component Allocation Change

## Structure

`ComponentAllocationChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousAllocation` | `int` | Required | - | getPreviousAllocation(): int | setPreviousAllocation(int previousAllocation): void |
| `newAllocation` | `int` | Required | - | getNewAllocation(): int | setNewAllocation(int newAllocation): void |
| `componentId` | `int` | Required | - | getComponentId(): int | setComponentId(int componentId): void |
| `componentHandle` | `string` | Required | - | getComponentHandle(): string | setComponentHandle(string componentHandle): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `allocationId` | `int` | Required | - | getAllocationId(): int | setAllocationId(int allocationId): void |
| `allocatedQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getAllocatedQuantity(): | setAllocatedQuantity( allocatedQuantity): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentAllocationChangeBuilder;

$componentAllocationChange = ComponentAllocationChangeBuilder::init(
    78,
    118,
    72,
    'component_handle8',
    'memo2',
    174
)
    ->allocatedQuantity(
        88
    )
    ->build();
```

