
# Prepaid Subscription Balance Changed

## Structure

`PrepaidSubscriptionBalanceChanged`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `string` | Required | - | getReason(): string | setReason(string reason): void |
| `currentAccountBalanceInCents` | `int` | Required | - | getCurrentAccountBalanceInCents(): int | setCurrentAccountBalanceInCents(int currentAccountBalanceInCents): void |
| `prepaymentAccountBalanceInCents` | `int` | Required | - | getPrepaymentAccountBalanceInCents(): int | setPrepaymentAccountBalanceInCents(int prepaymentAccountBalanceInCents): void |
| `currentUsageAmountInCents` | `int` | Required | - | getCurrentUsageAmountInCents(): int | setCurrentUsageAmountInCents(int currentUsageAmountInCents): void |

## Example (as JSON)

```json
{
  "reason": "reason8",
  "current_account_balance_in_cents": 250,
  "prepayment_account_balance_in_cents": 44,
  "current_usage_amount_in_cents": 242
}
```

