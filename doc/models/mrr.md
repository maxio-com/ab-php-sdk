
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
| `atTime` | `?string` | Optional | ISO8601 timestamp | getAtTime(): ?string | setAtTime(?string atTime): void |

## Example (as JSON)

```json
{
  "amount_in_cents": 208,
  "amount_formatted": "amount_formatted2",
  "currency": "currency0",
  "currency_symbol": "currency_symbol8",
  "breakouts": {
    "plan_amount_in_cents": 254,
    "plan_amount_formatted": "plan_amount_formatted0",
    "usage_amount_in_cents": 106,
    "usage_amount_formatted": "usage_amount_formatted8"
  }
}
```

