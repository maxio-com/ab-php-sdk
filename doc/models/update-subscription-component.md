
# Update Subscription Component

## Structure

`UpdateSubscriptionComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `customPrice` | [`?ComponentCustomPrice`](../../doc/models/component-custom-price.md) | Optional | Create or update custom pricing unique to the subscription. Used in place of `price_point_id`. | getCustomPrice(): ?ComponentCustomPrice | setCustomPrice(?ComponentCustomPrice customPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionComponentBuilder;
use AdvancedBillingLib\Models\Builders\ComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\IntervalUnit;

$updateSubscriptionComponent = UpdateSubscriptionComponentBuilder::init()
    ->componentId(118)
    ->customPrice(
        ComponentCustomPriceBuilder::init(
            [
                PriceBuilder::init(
                    242,
                    23.26
                )
                    ->endingQuantity(
                        40
                    )
                    ->build(),
                PriceBuilder::init(
                    242,
                    23.26
                )
                    ->endingQuantity(
                        40
                    )
                    ->build()
            ]
        )
            ->taxIncluded(false)
            ->pricingScheme(PricingScheme::STAIRSTEP)
            ->interval(66)
            ->intervalUnit(IntervalUnit::DAY)
            ->listPricePointId(174)
            ->build()
    )
    ->build();
```

