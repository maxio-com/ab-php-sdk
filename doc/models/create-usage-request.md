
# Create Usage Request

## Structure

`CreateUsageRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `usage` | [`CreateUsage`](../../doc/models/create-usage.md) | Required | - | getUsage(): CreateUsage | setUsage(CreateUsage usage): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateUsageRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateUsageBuilder;
use AdvancedBillingLib\Models\Builders\BillingScheduleBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\ComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\IntervalUnit;

$createUsageRequest = CreateUsageRequestBuilder::init(
    CreateUsageBuilder::init()
        ->quantity(162.34)
        ->pricePointId('price_point_id0')
        ->memo('memo2')
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
        ->build()
)->build();
```

