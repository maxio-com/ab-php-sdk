
# Net Terms

## Structure

`NetTerms`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `defaultNetTerms` | `?int` | Optional | **Default**: `0` | getDefaultNetTerms(): ?int | setDefaultNetTerms(?int defaultNetTerms): void |
| `automaticNetTerms` | `?int` | Optional | **Default**: `0` | getAutomaticNetTerms(): ?int | setAutomaticNetTerms(?int automaticNetTerms): void |
| `remittanceNetTerms` | `?int` | Optional | **Default**: `0` | getRemittanceNetTerms(): ?int | setRemittanceNetTerms(?int remittanceNetTerms): void |
| `netTermsOnRemittanceSignupsEnabled` | `?bool` | Optional | **Default**: `false` | getNetTermsOnRemittanceSignupsEnabled(): ?bool | setNetTermsOnRemittanceSignupsEnabled(?bool netTermsOnRemittanceSignupsEnabled): void |
| `customNetTermsEnabled` | `?bool` | Optional | **Default**: `false` | getCustomNetTermsEnabled(): ?bool | setCustomNetTermsEnabled(?bool customNetTermsEnabled): void |

## Example (as JSON)

```json
{
  "default_net_terms": 0,
  "automatic_net_terms": 0,
  "remittance_net_terms": 0,
  "net_terms_on_remittance_signups_enabled": false,
  "custom_net_terms_enabled": false
}
```

