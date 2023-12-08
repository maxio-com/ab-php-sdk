
# Proforma Invoice Discount

## Structure

`ProformaInvoiceDiscount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTitle(): ?string | setTitle(?string title): void |
| `sourceType` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getSourceType(): ?string | setSourceType(?string sourceType): void |
| `discountType` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDiscountType(): ?string | setDiscountType(?string discountType): void |
| `eligibleAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getEligibleAmount(): ?string | setEligibleAmount(?string eligibleAmount): void |
| `discountAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `lineItemBreakouts` | [`?(ProformaInvoiceDiscountBreakout[])`](../../doc/models/proforma-invoice-discount-breakout.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getLineItemBreakouts(): ?array | setLineItemBreakouts(?array lineItemBreakouts): void |

## Example (as JSON)

```json
{
  "title": "title8",
  "source_type": "source_type2",
  "discount_type": "discount_type0",
  "eligible_amount": "eligible_amount4",
  "discount_amount": "discount_amount6"
}
```

