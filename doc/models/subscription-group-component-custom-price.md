
# Subscription Group Component Custom Price

Used in place of `price_point_id` to define a custom price point unique to the subscription. You still need to provide `component_id`.

## Structure

`SubscriptionGroupComponentCustomPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |
| `overagePricing` | [`?(ComponentCustomPrice[])`](../../doc/models/component-custom-price.md) | Optional | - | getOveragePricing(): ?array | setOveragePricing(?array overagePricing): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\Builders\ComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$subscriptionGroupComponentCustomPrice = SubscriptionGroupComponentCustomPriceBuilder::init()
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
    ->build();
```

