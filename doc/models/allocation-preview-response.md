
# Allocation Preview Response

## Structure

`AllocationPreviewResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocationPreview` | [`AllocationPreview`](../../doc/models/allocation-preview.md) | Required | - | getAllocationPreview(): AllocationPreview | setAllocationPreview(AllocationPreview allocationPreview): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AllocationPreviewResponseBuilder;
use AdvancedBillingLib\Models\Builders\AllocationPreviewBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$allocationPreviewResponse = AllocationPreviewResponseBuilder::init(
    AllocationPreviewBuilder::init()
        ->startDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->endDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->subtotalInCents(240)
        ->totalTaxInCents(108)
        ->totalDiscountInCents(142)
        ->build()
)->build();
```

