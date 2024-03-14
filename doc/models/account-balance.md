
# Account Balance

## Structure

`AccountBalance`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `balanceInCents` | `?int` | Optional | The balance in cents. | getBalanceInCents(): ?int | setBalanceInCents(?int balanceInCents): void |
| `automaticBalanceInCents` | `?int` | Optional | The automatic balance in cents. | getAutomaticBalanceInCents(): ?int | setAutomaticBalanceInCents(?int automaticBalanceInCents): void |
| `remittanceBalanceInCents` | `?int` | Optional | The remittance balance in cents. | getRemittanceBalanceInCents(): ?int | setRemittanceBalanceInCents(?int remittanceBalanceInCents): void |

## Example (as JSON)

```json
{
  "balance_in_cents": 16,
  "automatic_balance_in_cents": 226,
  "remittance_balance_in_cents": 62
}
```

