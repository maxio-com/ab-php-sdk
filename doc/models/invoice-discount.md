
# Invoice Discount

## Structure

`InvoiceDiscount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `sourceType` | [`?string(InvoiceDiscountSourceType)`](../../doc/models/invoice-discount-source-type.md) | Optional | - | getSourceType(): ?string | setSourceType(?string sourceType): void |
| `sourceId` | `?int` | Optional | - | getSourceId(): ?int | setSourceId(?int sourceId): void |
| `discountType` | [`?string(InvoiceDiscountType)`](../../doc/models/invoice-discount-type.md) | Optional | - | getDiscountType(): ?string | setDiscountType(?string discountType): void |
| `percentage` | `?string` | Optional | - | getPercentage(): ?string | setPercentage(?string percentage): void |
| `eligibleAmount` | `?string` | Optional | - | getEligibleAmount(): ?string | setEligibleAmount(?string eligibleAmount): void |
| `discountAmount` | `?string` | Optional | - | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `transactionId` | `?int` | Optional | - | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `lineItemBreakouts` | [`?(InvoiceDiscountBreakout[])`](../../doc/models/invoice-discount-breakout.md) | Optional | - | getLineItemBreakouts(): ?array | setLineItemBreakouts(?array lineItemBreakouts): void |

## Example (as JSON)

```json
{
  "uid": "uid0",
  "title": "title4",
  "description": "description0",
  "code": "code8",
  "source_type": "Coupon"
}
```

