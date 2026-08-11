
# Invoice Tax Breakout

## Structure

`InvoiceTaxBreakout`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `taxableAmount` | `?string` | Optional | - | getTaxableAmount(): ?string | setTaxableAmount(?string taxableAmount): void |
| `taxAmount` | `?string` | Optional | - | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `taxExemptAmount` | `?string` | Optional | - | getTaxExemptAmount(): ?string | setTaxExemptAmount(?string taxExemptAmount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceTaxBreakoutBuilder;

$invoiceTaxBreakout = InvoiceTaxBreakoutBuilder::init()
    ->uid('uid4')
    ->taxableAmount('taxable_amount8')
    ->taxAmount('tax_amount2')
    ->taxExemptAmount('tax_exempt_amount4')
    ->build();
```

