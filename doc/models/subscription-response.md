
# Subscription Response

## Structure

`SubscriptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`?Subscription`](../../doc/models/subscription.md) | Optional | - | getSubscription(): ?Subscription | setSubscription(?Subscription subscription): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionResponseBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionBuilder;
use AdvancedBillingLib\Models\SubscriptionState;

$subscriptionResponse = SubscriptionResponseBuilder::init()
    ->subscription(
        SubscriptionBuilder::init()
            ->id(8)
            ->state(SubscriptionState::PAUSED)
            ->balanceInCents(124)
            ->totalRevenueInCents(48)
            ->productPriceInCents(238)
            ->build()
    )
    ->build();
```

