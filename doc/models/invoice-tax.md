
# Invoice Tax

## Structure

`InvoiceTax`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `sourceType` | [`?string(ProformaInvoiceTaxSourceType)`](../../doc/models/proforma-invoice-tax-source-type.md) | Optional | - | getSourceType(): ?string | setSourceType(?string sourceType): void |
| `sourceId` | `?int` | Optional | - | getSourceId(): ?int | setSourceId(?int sourceId): void |
| `percentage` | `?string` | Optional | - | getPercentage(): ?string | setPercentage(?string percentage): void |
| `taxableAmount` | `?string` | Optional | - | getTaxableAmount(): ?string | setTaxableAmount(?string taxableAmount): void |
| `taxAmount` | `?string` | Optional | - | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `transactionId` | `?int` | Optional | - | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `lineItemBreakouts` | [`?(InvoiceTaxBreakout[])`](../../doc/models/invoice-tax-breakout.md) | Optional | - | getLineItemBreakouts(): ?array | setLineItemBreakouts(?array lineItemBreakouts): void |
| `taxComponentBreakouts` | [`?(InvoiceTaxComponentBreakout[])`](../../doc/models/invoice-tax-component-breakout.md) | Optional | - | getTaxComponentBreakouts(): ?array | setTaxComponentBreakouts(?array taxComponentBreakouts): void |
| `euVat` | `?bool` | Optional | - | getEuVat(): ?bool | setEuVat(?bool euVat): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `taxExemptAmount` | `?string` | Optional | - | getTaxExemptAmount(): ?string | setTaxExemptAmount(?string taxExemptAmount): void |

## Example (as JSON)

```json
{
  "uid": "uid8",
  "title": "title6",
  "description": "description2",
  "source_type": "Tax",
  "source_id": 164
}
```

