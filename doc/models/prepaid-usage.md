
# Prepaid Usage

## Structure

`PrepaidUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousUnitBalance` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPreviousUnitBalance(): string | setPreviousUnitBalance(string previousUnitBalance): void |
| `previousOverageUnitBalance` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPreviousOverageUnitBalance(): string | setPreviousOverageUnitBalance(string previousOverageUnitBalance): void |
| `newUnitBalance` | `int` | Required | - | getNewUnitBalance(): int | setNewUnitBalance(int newUnitBalance): void |
| `newOverageUnitBalance` | `int` | Required | - | getNewOverageUnitBalance(): int | setNewOverageUnitBalance(int newOverageUnitBalance): void |
| `usageQuantity` | `int` | Required | - | getUsageQuantity(): int | setUsageQuantity(int usageQuantity): void |
| `overageUsageQuantity` | `int` | Required | - | getOverageUsageQuantity(): int | setOverageUsageQuantity(int overageUsageQuantity): void |
| `componentId` | `int` | Required | - | getComponentId(): int | setComponentId(int componentId): void |
| `componentHandle` | `string` | Required | - | getComponentHandle(): string | setComponentHandle(string componentHandle): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `allocationDetails` | [`PrepaidUsageAllocationDetail[]`](../../doc/models/prepaid-usage-allocation-detail.md) | Required | - | getAllocationDetails(): array | setAllocationDetails(array allocationDetails): void |

## Example (as JSON)

```json
{
  "previous_unit_balance": "previous_unit_balance0",
  "previous_overage_unit_balance": "previous_overage_unit_balance4",
  "new_unit_balance": 252,
  "new_overage_unit_balance": 224,
  "usage_quantity": 214,
  "overage_usage_quantity": 106,
  "component_id": 176,
  "component_handle": "component_handle4",
  "memo": "memo8",
  "allocation_details": [
    {
      "allocation_id": 18,
      "charge_id": 84,
      "usage_quantity": 10
    }
  ]
}
```

