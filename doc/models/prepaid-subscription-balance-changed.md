
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

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaidSubscriptionBalanceChangedBuilder;

$prepaidSubscriptionBalanceChanged = PrepaidSubscriptionBalanceChangedBuilder::init(
    'reason6',
    194,
    100,
    186
)->build();
```

