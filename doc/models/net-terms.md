
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

## Example

```php
use AdvancedBillingLib\Models\Builders\NetTermsBuilder;

$netTerms = NetTermsBuilder::init()
    ->defaultNetTerms(0)
    ->automaticNetTerms(0)
    ->remittanceNetTerms(0)
    ->netTermsOnRemittanceSignupsEnabled(false)
    ->customNetTermsEnabled(false)
    ->build();
```

