
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

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaymentAccountBalanceChangedBuilder;

$prepaymentAccountBalanceChanged = PrepaymentAccountBalanceChangedBuilder::init(
    'reason8',
    134,
    158,
    'currency_code8'
)->build();
```

