
# Subscription MRR Response

## Structure

`SubscriptionMRRResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionsMrr` | [`SubscriptionMRR[]`](../../doc/models/subscription-mrr.md) | Required | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getSubscriptionsMrr(): array | setSubscriptionsMrr(array subscriptionsMrr): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionMRRResponseBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionMRRBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionMRRBreakoutBuilder;

$subscriptionMRRResponse = SubscriptionMRRResponseBuilder::init(
    [
        SubscriptionMRRBuilder::init(
            0,
            0
        )
            ->breakouts(
                SubscriptionMRRBreakoutBuilder::init(
                    0,
                    0
                )->build()
            )->build()
    ]
)->build();
```

