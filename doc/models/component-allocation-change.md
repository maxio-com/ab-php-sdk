
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
| `allocatedQuantity` | `?int` | Optional | - | getAllocatedQuantity(): ?int | setAllocatedQuantity(?int allocatedQuantity): void |

## Example (as JSON)

```json
{
  "previous_allocation": 94,
  "new_allocation": 102,
  "component_id": 88,
  "component_handle": "component_handle8",
  "memo": "memo2",
  "allocation_id": 158,
  "allocated_quantity": 182
}
```

