
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

## Example (as JSON)

```json
{
  "tax_rule_id": 226,
  "percentage": "percentage0",
  "country_code": "country_code8",
  "subdivision_code": "subdivision_code6"
}
```

