
# Historic Usage

(Optional) For Event Based Components. If the `include=historic_usages` query param is provided, the last ten billing periods will be returned.

## Structure

`HistoricUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalUsageQuantity` | `?float` | Optional | Total usage of a component for billing period | getTotalUsageQuantity(): ?float | setTotalUsageQuantity(?float totalUsageQuantity): void |
| `billingPeriodStartsAt` | `?DateTime` | Optional | Start date of billing period | getBillingPeriodStartsAt(): ?\DateTime | setBillingPeriodStartsAt(?\DateTime billingPeriodStartsAt): void |
| `billingPeriodEndsAt` | `?DateTime` | Optional | End date of billing period | getBillingPeriodEndsAt(): ?\DateTime | setBillingPeriodEndsAt(?\DateTime billingPeriodEndsAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\HistoricUsageBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$historicUsage = HistoricUsageBuilder::init()
    ->totalUsageQuantity(140.74)
    ->billingPeriodStartsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->billingPeriodEndsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

