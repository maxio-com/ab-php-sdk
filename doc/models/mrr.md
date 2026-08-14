
# MRR

## Structure

`MRR`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `amountFormatted` | `?string` | Optional | - | getAmountFormatted(): ?string | setAmountFormatted(?string amountFormatted): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `currencySymbol` | `?string` | Optional | - | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `breakouts` | [`?Breakouts`](../../doc/models/breakouts.md) | Optional | - | getBreakouts(): ?Breakouts | setBreakouts(?Breakouts breakouts): void |
| `atTime` | `?DateTime` | Optional | ISO8601 timestamp | getAtTime(): ?\DateTime | setAtTime(?\DateTime atTime): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MRRBuilder;
use AdvancedBillingLib\Models\Builders\BreakoutsBuilder;

$mRR = MRRBuilder::init()
    ->amountInCents(122)
    ->amountFormatted('amount_formatted4')
    ->currency('currency2')
    ->currencySymbol('currency_symbol0')
    ->breakouts(
        BreakoutsBuilder::init()
            ->planAmountInCents(254)
            ->planAmountFormatted('plan_amount_formatted0')
            ->usageAmountInCents(106)
            ->usageAmountFormatted('usage_amount_formatted8')
            ->build()
    )
    ->build();
```

