
# Preview Allocations Request

## Structure

`PreviewAllocationsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocations` | [`CreateAllocation[]`](../../doc/models/create-allocation.md) | Required | - | getAllocations(): array | setAllocations(array allocations): void |
| `effectiveProrationDate` | `?DateTime` | Optional | To calculate proration amounts for a future time. Only within a current subscription period. Only ISO8601 format is supported. | getEffectiveProrationDate(): ?\DateTime | setEffectiveProrationDate(?\DateTime effectiveProrationDate): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PreviewAllocationsRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateAllocationBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\CreditType;

$previewAllocationsRequest = PreviewAllocationsRequestBuilder::init(
    [
        CreateAllocationBuilder::init(
            26.48
        )
            ->decimalQuantity('decimal_quantity8')
            ->previousQuantity(55.5)
            ->decimalPreviousQuantity('decimal_previous_quantity2')
            ->componentId(242)
            ->memo('memo6')
            ->build()
    ]
)
    ->effectiveProrationDate(DateTimeHelper::fromSimpleDate('2023-12-01'))
    ->upgradeCharge(CreditType::NONE)
    ->downgradeCredit(CreditType::NONE)
    ->build();
```

