
# Breakouts

## Structure

`Breakouts`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planAmountInCents` | `?int` | Optional | - | getPlanAmountInCents(): ?int | setPlanAmountInCents(?int planAmountInCents): void |
| `planAmountFormatted` | `?string` | Optional | - | getPlanAmountFormatted(): ?string | setPlanAmountFormatted(?string planAmountFormatted): void |
| `usageAmountInCents` | `?int` | Optional | - | getUsageAmountInCents(): ?int | setUsageAmountInCents(?int usageAmountInCents): void |
| `usageAmountFormatted` | `?string` | Optional | - | getUsageAmountFormatted(): ?string | setUsageAmountFormatted(?string usageAmountFormatted): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BreakoutsBuilder;

$breakouts = BreakoutsBuilder::init()
    ->planAmountInCents(254)
    ->planAmountFormatted('plan_amount_formatted0')
    ->usageAmountInCents(106)
    ->usageAmountFormatted('usage_amount_formatted8')
    ->build();
```

