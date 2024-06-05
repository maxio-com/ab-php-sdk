
# Historic Usage

Optional for Event Based Components. If the `include=historic_usages` query param is provided, the last ten billing periods will be returned.

## Structure

`HistoricUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalUsageQuantity` | `?float` | Optional | Total usage of a component for billing period | getTotalUsageQuantity(): ?float | setTotalUsageQuantity(?float totalUsageQuantity): void |
| `billingPeriodStartsAt` | `?DateTime` | Optional | Start date of billing period | getBillingPeriodStartsAt(): ?\DateTime | setBillingPeriodStartsAt(?\DateTime billingPeriodStartsAt): void |
| `billingPeriodEndsAt` | `?DateTime` | Optional | End date of billing period | getBillingPeriodEndsAt(): ?\DateTime | setBillingPeriodEndsAt(?\DateTime billingPeriodEndsAt): void |

## Example (as JSON)

```json
{
  "total_usage_quantity": 26.6,
  "billing_period_starts_at": "2016-03-13T12:52:32.123Z",
  "billing_period_ends_at": "2016-03-13T12:52:32.123Z"
}
```

