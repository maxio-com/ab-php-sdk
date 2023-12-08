
# Metered Usage

## Structure

`MeteredUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousUnitBalance` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPreviousUnitBalance(): string | setPreviousUnitBalance(string previousUnitBalance): void |
| `newUnitBalance` | `int` | Required | - | getNewUnitBalance(): int | setNewUnitBalance(int newUnitBalance): void |
| `usageQuantity` | `int` | Required | - | getUsageQuantity(): int | setUsageQuantity(int usageQuantity): void |
| `componentId` | `int` | Required | - | getComponentId(): int | setComponentId(int componentId): void |
| `componentHandle` | `string` | Required | - | getComponentHandle(): string | setComponentHandle(string componentHandle): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |

## Example (as JSON)

```json
{
  "previous_unit_balance": "previous_unit_balance6",
  "new_unit_balance": 80,
  "usage_quantity": 42,
  "component_id": 4,
  "component_handle": "component_handle8",
  "memo": "memo2"
}
```

