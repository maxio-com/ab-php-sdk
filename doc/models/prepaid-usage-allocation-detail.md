
# Prepaid Usage Allocation Detail

## Structure

`PrepaidUsageAllocationDetail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocationId` | `?int` | Optional | - | getAllocationId(): ?int | setAllocationId(?int allocationId): void |
| `chargeId` | `?int` | Optional | - | getChargeId(): ?int | setChargeId(?int chargeId): void |
| `usageQuantity` | `?int` | Optional | - | getUsageQuantity(): ?int | setUsageQuantity(?int usageQuantity): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaidUsageAllocationDetailBuilder;

$prepaidUsageAllocationDetail = PrepaidUsageAllocationDetailBuilder::init()
    ->allocationId(144)
    ->chargeId(214)
    ->usageQuantity(140)
    ->build();
```

