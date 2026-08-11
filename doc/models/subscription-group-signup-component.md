
# Subscription Group Signup Component

## Structure

`SubscriptionGroupSignupComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | string\|int\|null | Optional | This is a container for one-of cases. | getComponentId(): | setComponentId( componentId): void |
| `allocatedQuantity` | string\|int\|null | Optional | This is a container for one-of cases. | getAllocatedQuantity(): | setAllocatedQuantity( allocatedQuantity): void |
| `unitBalance` | string\|int\|null | Optional | This is a container for one-of cases. | getUnitBalance(): | setUnitBalance( unitBalance): void |
| `pricePointId` | string\|int\|null | Optional | This is a container for one-of cases. | getPricePointId(): | setPricePointId( pricePointId): void |
| `customPrice` | [`?SubscriptionGroupComponentCustomPrice`](../../doc/models/subscription-group-component-custom-price.md) | Optional | Used in place of `price_point_id` to define a custom price point unique to the subscription. You still need to provide `component_id`. | getCustomPrice(): ?SubscriptionGroupComponentCustomPrice | setCustomPrice(?SubscriptionGroupComponentCustomPrice customPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupComponentBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\Builders\ComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$subscriptionGroupSignupComponent = SubscriptionGroupSignupComponentBuilder::init()
    ->componentId(
        'String7'
    )
    ->allocatedQuantity(
        'String1'
    )
    ->unitBalance(
        'String5'
    )
    ->pricePointId(
        'String1'
    )
    ->customPrice(
        SubscriptionGroupComponentCustomPriceBuilder::init()
            ->pricingScheme(PricingScheme::STAIRSTEP)
            ->prices(
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
            ->overagePricing(
                [
                    ComponentCustomPriceBuilder::init(
                        [
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
                        ->interval(230)
                        ->intervalUnit(IntervalUnit::DAY)
                        ->listPricePointId(10)
                        ->build(),
                    ComponentCustomPriceBuilder::init(
                        [
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
                        ->interval(230)
                        ->intervalUnit(IntervalUnit::DAY)
                        ->listPricePointId(10)
                        ->build(),
                    ComponentCustomPriceBuilder::init(
                        [
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
                        ->interval(230)
                        ->intervalUnit(IntervalUnit::DAY)
                        ->listPricePointId(10)
                        ->build()
                ]
            )
            ->build()
    )
    ->build();
```

