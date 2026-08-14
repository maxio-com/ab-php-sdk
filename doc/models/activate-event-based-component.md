
# Activate Event Based Component

## Structure

`ActivateEventBasedComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePointId` | `?int` | Optional | The Chargify id of the price point | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `billingSchedule` | [`?BillingSchedule`](../../doc/models/billing-schedule.md) | Optional | Billing schedule settings for component allocations or usages on multi-frequency subscriptions. Use this to start a component's billing period on a custom date instead of aligning with the product charge schedule. | getBillingSchedule(): ?BillingSchedule | setBillingSchedule(?BillingSchedule billingSchedule): void |
| `customPrice` | [`?ComponentCustomPrice`](../../doc/models/component-custom-price.md) | Optional | Create or update custom pricing unique to the subscription. Used in place of `price_point_id`. | getCustomPrice(): ?ComponentCustomPrice | setCustomPrice(?ComponentCustomPrice customPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ActivateEventBasedComponentBuilder;
use AdvancedBillingLib\Models\Builders\BillingScheduleBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\ComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\IntervalUnit;

$activateEventBasedComponent = ActivateEventBasedComponentBuilder::init()
    ->pricePointId(68)
    ->billingSchedule(
        BillingScheduleBuilder::init()
            ->initialBillingAt(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->build()
    )
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

