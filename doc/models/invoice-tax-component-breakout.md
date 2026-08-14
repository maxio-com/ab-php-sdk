
# Invoice Tax Component Breakout

## Structure

`InvoiceTaxComponentBreakout`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `taxRuleId` | `?int` | Optional | - | getTaxRuleId(): ?int | setTaxRuleId(?int taxRuleId): void |
| `percentage` | `?string` | Optional | - | getPercentage(): ?string | setPercentage(?string percentage): void |
| `countryCode` | `?string` | Optional | - | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `subdivisionCode` | `?string` | Optional | - | getSubdivisionCode(): ?string | setSubdivisionCode(?string subdivisionCode): void |
| `taxAmount` | `?string` | Optional | - | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `taxableAmount` | `?string` | Optional | - | getTaxableAmount(): ?string | setTaxableAmount(?string taxableAmount): void |
| `taxExemptAmount` | `?string` | Optional | - | getTaxExemptAmount(): ?string | setTaxExemptAmount(?string taxExemptAmount): void |
| `nonTaxableAmount` | `?string` | Optional | - | getNonTaxableAmount(): ?string | setNonTaxableAmount(?string nonTaxableAmount): void |
| `taxName` | `?string` | Optional | - | getTaxName(): ?string | setTaxName(?string taxName): void |
| `taxType` | `?string` | Optional | - | getTaxType(): ?string | setTaxType(?string taxType): void |
| `rateType` | `?string` | Optional | - | getRateType(): ?string | setRateType(?string rateType): void |
| `taxAuthorityType` | `?int` | Optional | - | getTaxAuthorityType(): ?int | setTaxAuthorityType(?int taxAuthorityType): void |
| `stateAssignedNo` | `?string` | Optional | - | getStateAssignedNo(): ?string | setStateAssignedNo(?string stateAssignedNo): void |
| `taxSubType` | `?string` | Optional | - | getTaxSubType(): ?string | setTaxSubType(?string taxSubType): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceTaxComponentBreakoutBuilder;

$invoiceTaxComponentBreakout = InvoiceTaxComponentBreakoutBuilder::init()
    ->taxRuleId(66)
    ->percentage('percentage0')
    ->countryCode('country_code2')
    ->subdivisionCode('subdivision_code6')
    ->taxAmount('tax_amount4')
    ->build();
```

