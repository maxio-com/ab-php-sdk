
# Allocation Preview

## Structure

`AllocationPreview`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startDate` | `?DateTime` | Optional | - | getStartDate(): ?\DateTime | setStartDate(?\DateTime startDate): void |
| `endDate` | `?DateTime` | Optional | - | getEndDate(): ?\DateTime | setEndDate(?\DateTime endDate): void |
| `subtotalInCents` | `?int` | Optional | - | getSubtotalInCents(): ?int | setSubtotalInCents(?int subtotalInCents): void |
| `totalTaxInCents` | `?int` | Optional | - | getTotalTaxInCents(): ?int | setTotalTaxInCents(?int totalTaxInCents): void |
| `totalDiscountInCents` | `?int` | Optional | - | getTotalDiscountInCents(): ?int | setTotalDiscountInCents(?int totalDiscountInCents): void |
| `totalInCents` | `?int` | Optional | - | getTotalInCents(): ?int | setTotalInCents(?int totalInCents): void |
| `direction` | [`?string(AllocationPreviewDirection)`](../../doc/models/allocation-preview-direction.md) | Optional | - | getDirection(): ?string | setDirection(?string direction): void |
| `prorationScheme` | `?string` | Optional | - | getProrationScheme(): ?string | setProrationScheme(?string prorationScheme): void |
| `lineItems` | [`?(AllocationPreviewLineItem[])`](../../doc/models/allocation-preview-line-item.md) | Optional | - | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `accrueCharge` | `?bool` | Optional | - | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |
| `allocations` | [`?(AllocationPreviewItem[])`](../../doc/models/allocation-preview-item.md) | Optional | - | getAllocations(): ?array | setAllocations(?array allocations): void |
| `periodType` | `?string` | Optional | - | getPeriodType(): ?string | setPeriodType(?string periodType): void |
| `existingBalanceInCents` | `?int` | Optional | An integer representing the amount of the subscription's current balance | getExistingBalanceInCents(): ?int | setExistingBalanceInCents(?int existingBalanceInCents): void |

## Example (as JSON)

```json
{
  "start_date": "2016-03-13T12:52:32.123Z",
  "end_date": "2016-03-13T12:52:32.123Z",
  "subtotal_in_cents": 4,
  "total_tax_in_cents": 128,
  "total_discount_in_cents": 122
}
```

