
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
| `atTime` | `DateTime` | Required | - | getAtTime(): \DateTime | setAtTime(\DateTime atTime): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreditAccountBalanceChangedBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$creditAccountBalanceChanged = CreditAccountBalanceChangedBuilder::init(
    'reason4',
    216,
    166,
    'currency_code6',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

