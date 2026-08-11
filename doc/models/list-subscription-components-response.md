
# List Subscription Components Response

## Structure

`ListSubscriptionComponentsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionsComponents` | [`SubscriptionComponent[]`](../../doc/models/subscription-component.md) | Required | - | getSubscriptionsComponents(): array | setSubscriptionsComponents(array subscriptionsComponents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSubscriptionComponentsResponseBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionComponentBuilder;
use AdvancedBillingLib\Models\ComponentKind;

$listSubscriptionComponentsResponse = ListSubscriptionComponentsResponseBuilder::init(
    [
        SubscriptionComponentBuilder::init()
            ->id(138)
            ->name('name2')
            ->kind(ComponentKind::METERED_COMPONENT)
            ->unitName('unit_name4')
            ->enabled(false)
            ->build()
    ]
)->build();
```

