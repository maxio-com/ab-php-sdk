
# Metered Usage

## Structure

`MeteredUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousUnitBalance` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPreviousUnitBalance(): string | setPreviousUnitBalance(string previousUnitBalance): void |
| `newUnitBalance` | int\|string | Required | This is a container for one-of cases. | getNewUnitBalance(): | setNewUnitBalance( newUnitBalance): void |
| `usageQuantity` | `int` | Required | - | getUsageQuantity(): int | setUsageQuantity(int usageQuantity): void |
| `componentId` | `int` | Required | - | getComponentId(): int | setComponentId(int componentId): void |
| `componentHandle` | `string` | Required | - | getComponentHandle(): string | setComponentHandle(string componentHandle): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MeteredUsageBuilder;

$meteredUsage = MeteredUsageBuilder::init(
    'previous_unit_balance6',
    66,
    106,
    68,
    'component_handle0',
    'memo4'
)->build();
```

