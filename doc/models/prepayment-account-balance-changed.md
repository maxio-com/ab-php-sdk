
# Prepayment Account Balance Changed

## Structure

`PrepaymentAccountBalanceChanged`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `string` | Required | - | getReason(): string | setReason(string reason): void |
| `prepaymentAccountBalanceInCents` | `int` | Required | - | getPrepaymentAccountBalanceInCents(): int | setPrepaymentAccountBalanceInCents(int prepaymentAccountBalanceInCents): void |
| `prepaymentBalanceChangeInCents` | `int` | Required | - | getPrepaymentBalanceChangeInCents(): int | setPrepaymentBalanceChangeInCents(int prepaymentBalanceChangeInCents): void |
| `currencyCode` | `string` | Required | - | getCurrencyCode(): string | setCurrencyCode(string currencyCode): void |

## Example (as JSON)

```json
{
  "reason": "reason4",
  "prepayment_account_balance_in_cents": 182,
  "prepayment_balance_change_in_cents": 206,
  "currency_code": "currency_code4"
}
```

