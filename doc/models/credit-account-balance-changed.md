
# Credit Account Balance Changed

## Structure

`CreditAccountBalanceChanged`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `string` | Required | - | getReason(): string | setReason(string reason): void |
| `serviceCreditAccountBalanceInCents` | `int` | Required | - | getServiceCreditAccountBalanceInCents(): int | setServiceCreditAccountBalanceInCents(int serviceCreditAccountBalanceInCents): void |
| `serviceCreditBalanceChangeInCents` | `int` | Required | - | getServiceCreditBalanceChangeInCents(): int | setServiceCreditBalanceChangeInCents(int serviceCreditBalanceChangeInCents): void |
| `currencyCode` | `string` | Required | - | getCurrencyCode(): string | setCurrencyCode(string currencyCode): void |
| `atTime` | `string` | Required | - | getAtTime(): string | setAtTime(string atTime): void |

## Example (as JSON)

```json
{
  "reason": "reason8",
  "service_credit_account_balance_in_cents": 10,
  "service_credit_balance_change_in_cents": 116,
  "currency_code": "currency_code8",
  "at_time": "at_time0"
}
```

