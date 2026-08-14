
# Update Allocation Expiration Date

## Structure

`UpdateAllocationExpirationDate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocation` | [`?AllocationExpirationDate`](../../doc/models/allocation-expiration-date.md) | Optional | - | getAllocation(): ?AllocationExpirationDate | setAllocation(?AllocationExpirationDate allocation): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateAllocationExpirationDateBuilder;
use AdvancedBillingLib\Models\Builders\AllocationExpirationDateBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$updateAllocationExpirationDate = UpdateAllocationExpirationDateBuilder::init()
    ->allocation(
        AllocationExpirationDateBuilder::init()
            ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->build()
    )
    ->build();
```

