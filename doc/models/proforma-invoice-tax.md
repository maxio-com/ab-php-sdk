
# Proforma Invoice Tax

## Structure

`ProformaInvoiceTax`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getUid(): ?string | setUid(?string uid): void |
| `title` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTitle(): ?string | setTitle(?string title): void |
| `sourceType` | [`?string(ProformaInvoiceTaxSourceType)`](../../doc/models/proforma-invoice-tax-source-type.md) | Optional | - | getSourceType(): ?string | setSourceType(?string sourceType): void |
| `percentage` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getPercentage(): ?string | setPercentage(?string percentage): void |
| `taxableAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTaxableAmount(): ?string | setTaxableAmount(?string taxableAmount): void |
| `taxAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `lineItemBreakouts` | [`?(InvoiceTaxBreakout[])`](../../doc/models/invoice-tax-breakout.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getLineItemBreakouts(): ?array | setLineItemBreakouts(?array lineItemBreakouts): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProformaInvoiceTaxBuilder;
use AdvancedBillingLib\Models\ProformaInvoiceTaxSourceType;

$proformaInvoiceTax = ProformaInvoiceTaxBuilder::init()
    ->uid('uid4')
    ->title('title0')
    ->sourceType(ProformaInvoiceTaxSourceType::TAX)
    ->percentage('percentage2')
    ->taxableAmount('taxable_amount8')
    ->build();
```

