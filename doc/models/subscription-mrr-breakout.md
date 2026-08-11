
# Subscription MRR Breakout

## Structure

`SubscriptionMRRBreakout`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planAmountInCents` | `int` | Required | - | getPlanAmountInCents(): int | setPlanAmountInCents(int planAmountInCents): void |
| `usageAmountInCents` | `int` | Required | - | getUsageAmountInCents(): int | setUsageAmountInCents(int usageAmountInCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionMRRBreakoutBuilder;

$subscriptionMRRBreakout = SubscriptionMRRBreakoutBuilder::init(
    248,
    100
)->build();
```

