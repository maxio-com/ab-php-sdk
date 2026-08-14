
# Create Usage

## Structure

`CreateUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantity` | `?float` | Optional | integer by default or decimal number if fractional quantities are enabled for the component | getQuantity(): ?float | setQuantity(?float quantity): void |
| `pricePointId` | `?string` | Optional | - | getPricePointId(): ?string | setPricePointId(?string pricePointId): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `billingSchedule` | [`?BillingSchedule`](../../doc/models/billing-schedule.md) | Optional | Billing schedule settings for component allocations or usages on multi-frequency subscriptions. Use this to start a component's billing period on a custom date instead of aligning with the product charge schedule. | getBillingSchedule(): ?BillingSchedule | setBillingSchedule(?BillingSchedule billingSchedule): void |
| `customPrice` | [`?ComponentCustomPrice`](../../doc/models/component-custom-price.md) | Optional | Create or update custom pricing unique to the subscription. Used in place of `price_point_id`. | getCustomPrice(): ?ComponentCustomPrice | setCustomPrice(?ComponentCustomPrice customPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateUsageBuilder;
use AdvancedBillingLib\Models\Builders\BillingScheduleBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\ComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\IntervalUnit;

$createUsage = CreateUsageBuilder::init()
    ->quantity(204.7)
    ->pricePointId('price_point_id4')
    ->memo('memo8')
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

