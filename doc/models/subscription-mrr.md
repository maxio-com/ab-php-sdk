
# Subscription MRR

## Structure

`SubscriptionMRR`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `mrrAmountInCents` | `int` | Required | - | getMrrAmountInCents(): int | setMrrAmountInCents(int mrrAmountInCents): void |
| `breakouts` | [`?SubscriptionMRRBreakout`](../../doc/models/subscription-mrr-breakout.md) | Optional | - | getBreakouts(): ?SubscriptionMRRBreakout | setBreakouts(?SubscriptionMRRBreakout breakouts): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionMRRBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionMRRBreakoutBuilder;

$subscriptionMRR = SubscriptionMRRBuilder::init(
    192,
    210
)
    ->breakouts(
        SubscriptionMRRBreakoutBuilder::init(
            254,
            106
        )->build()
    )->build();
```

