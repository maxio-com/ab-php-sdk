
# Prepaid Usage

## Structure

`PrepaidUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousUnitBalance` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPreviousUnitBalance(): string | setPreviousUnitBalance(string previousUnitBalance): void |
| `previousOverageUnitBalance` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPreviousOverageUnitBalance(): string | setPreviousOverageUnitBalance(string previousOverageUnitBalance): void |
| `newUnitBalance` | int\|string | Required | This is a container for one-of cases. | getNewUnitBalance(): | setNewUnitBalance( newUnitBalance): void |
| `newOverageUnitBalance` | int\|string | Required | This is a container for one-of cases. | getNewOverageUnitBalance(): | setNewOverageUnitBalance( newOverageUnitBalance): void |
| `usageQuantity` | `int` | Required | - | getUsageQuantity(): int | setUsageQuantity(int usageQuantity): void |
| `overageUsageQuantity` | `int` | Required | - | getOverageUsageQuantity(): int | setOverageUsageQuantity(int overageUsageQuantity): void |
| `componentId` | `int` | Required | - | getComponentId(): int | setComponentId(int componentId): void |
| `componentHandle` | `string` | Required | - | getComponentHandle(): string | setComponentHandle(string componentHandle): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `allocationDetails` | [`PrepaidUsageAllocationDetail[]`](../../doc/models/prepaid-usage-allocation-detail.md) | Required | - | getAllocationDetails(): array | setAllocationDetails(array allocationDetails): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaidUsageBuilder;
use AdvancedBillingLib\Models\Builders\PrepaidUsageAllocationDetailBuilder;

$prepaidUsage = PrepaidUsageBuilder::init(
    'previous_unit_balance4',
    'previous_overage_unit_balance0',
    206,
    78,
    246,
    138,
    208,
    'component_handle0',
    'memo4',
    [
        PrepaidUsageAllocationDetailBuilder::init()
            ->allocationId(18)
            ->chargeId(84)
            ->usageQuantity(10)
            ->build()
    ]
)->build();
```

