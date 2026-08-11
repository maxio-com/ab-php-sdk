
# Create Allocation Request

## Structure

`CreateAllocationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocation` | [`CreateAllocation`](../../doc/models/create-allocation.md) | Required | - | getAllocation(): CreateAllocation | setAllocation(CreateAllocation allocation): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateAllocationRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateAllocationBuilder;

$createAllocationRequest = CreateAllocationRequestBuilder::init(
    CreateAllocationBuilder::init(
        228.94
    )
        ->decimalQuantity('decimal_quantity6')
        ->previousQuantity(254.04)
        ->decimalPreviousQuantity('decimal_previous_quantity8')
        ->componentId(8)
        ->memo('memo2')
        ->build()
)->build();
```

