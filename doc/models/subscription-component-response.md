
# Subscription Component Response

## Structure

`SubscriptionComponentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `component` | [`?SubscriptionComponent`](../../doc/models/subscription-component.md) | Optional | - | getComponent(): ?SubscriptionComponent | setComponent(?SubscriptionComponent component): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionComponentResponseBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionComponentBuilder;
use AdvancedBillingLib\Models\ComponentKind;

$subscriptionComponentResponse = SubscriptionComponentResponseBuilder::init()
    ->component(
        SubscriptionComponentBuilder::init()
            ->id(80)
            ->name('name8')
            ->kind(ComponentKind::QUANTITY_BASED_COMPONENT)
            ->unitName('unit_name0')
            ->enabled(false)
            ->build()
    )
    ->build();
```

