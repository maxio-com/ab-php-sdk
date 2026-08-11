
# Dunner Data

## Structure

`DunnerData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `state` | `string` | Required | - | getState(): string | setState(string state): void |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `revenueAtRiskInCents` | `int` | Required | - | getRevenueAtRiskInCents(): int | setRevenueAtRiskInCents(int revenueAtRiskInCents): void |
| `createdAt` | `DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `attempts` | `int` | Required | - | getAttempts(): int | setAttempts(int attempts): void |
| `lastAttemptedAt` | `DateTime` | Required | - | getLastAttemptedAt(): \DateTime | setLastAttemptedAt(\DateTime lastAttemptedAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\DunnerDataBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$dunnerData = DunnerDataBuilder::init(
    'state4',
    230,
    134,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    6,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

