
# Proforma Invoice Tax

## Structure

`ProformaInvoiceTax`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getUid(): ?string | setUid(?string uid): void |
| `title` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTitle(): ?string | setTitle(?string title): void |
| `sourceType` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getSourceType(): ?string | setSourceType(?string sourceType): void |
| `percentage` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getPercentage(): ?string | setPercentage(?string percentage): void |
| `taxableAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTaxableAmount(): ?string | setTaxableAmount(?string taxableAmount): void |
| `taxAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `lineItemBreakouts` | [`?(ProformaInvoiceTaxBreakout[])`](../../doc/models/proforma-invoice-tax-breakout.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getLineItemBreakouts(): ?array | setLineItemBreakouts(?array lineItemBreakouts): void |

## Example (as JSON)

```json
{
  "uid": "uid8",
  "title": "title4",
  "source_type": "source_type8",
  "percentage": "percentage6",
  "taxable_amount": "taxable_amount2"
}
```

