
# Billing Manifest

## Structure

`BillingManifest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lineItems` | [`?(BillingManifestItem[])`](../../doc/models/billing-manifest-item.md) | Optional | - | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `totalInCents` | `?int` | Optional | - | getTotalInCents(): ?int | setTotalInCents(?int totalInCents): void |
| `totalDiscountInCents` | `?int` | Optional | - | getTotalDiscountInCents(): ?int | setTotalDiscountInCents(?int totalDiscountInCents): void |
| `totalTaxInCents` | `?int` | Optional | - | getTotalTaxInCents(): ?int | setTotalTaxInCents(?int totalTaxInCents): void |
| `subtotalInCents` | `?int` | Optional | - | getSubtotalInCents(): ?int | setSubtotalInCents(?int subtotalInCents): void |
| `startDate` | `?DateTime` | Optional | - | getStartDate(): ?\DateTime | setStartDate(?\DateTime startDate): void |
| `endDate` | `?DateTime` | Optional | - | getEndDate(): ?\DateTime | setEndDate(?\DateTime endDate): void |
| `periodType` | `?string` | Optional | - | getPeriodType(): ?string | setPeriodType(?string periodType): void |
| `existingBalanceInCents` | `?int` | Optional | - | getExistingBalanceInCents(): ?int | setExistingBalanceInCents(?int existingBalanceInCents): void |

## Example (as JSON)

```json
{
  "line_items": [
    {
      "transaction_type": "credit",
      "kind": "component",
      "amount_in_cents": 24,
      "memo": "memo2",
      "discount_amount_in_cents": 172
    },
    {
      "transaction_type": "credit",
      "kind": "component",
      "amount_in_cents": 24,
      "memo": "memo2",
      "discount_amount_in_cents": 172
    },
    {
      "transaction_type": "credit",
      "kind": "component",
      "amount_in_cents": 24,
      "memo": "memo2",
      "discount_amount_in_cents": 172
    }
  ],
  "total_in_cents": 192,
  "total_discount_in_cents": 178,
  "total_tax_in_cents": 172,
  "subtotal_in_cents": 48
}
```

