
# Proforma Invoice Discount

## Structure

`ProformaInvoiceDiscount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `title` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTitle(): ?string | setTitle(?string title): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `sourceType` | [`?string(ProformaInvoiceDiscountSourceType)`](../../doc/models/proforma-invoice-discount-source-type.md) | Optional | - | getSourceType(): ?string | setSourceType(?string sourceType): void |
| `discountType` | [`?string(InvoiceDiscountType)`](../../doc/models/invoice-discount-type.md) | Optional | - | getDiscountType(): ?string | setDiscountType(?string discountType): void |
| `eligibleAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getEligibleAmount(): ?string | setEligibleAmount(?string eligibleAmount): void |
| `discountAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `lineItemBreakouts` | [`?(InvoiceDiscountBreakout[])`](../../doc/models/invoice-discount-breakout.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getLineItemBreakouts(): ?array | setLineItemBreakouts(?array lineItemBreakouts): void |

## Example (as JSON)

```json
{
  "uid": "uid2",
  "title": "title8",
  "code": "code0",
  "source_type": "Coupon",
  "discount_type": "percentage"
}
```

