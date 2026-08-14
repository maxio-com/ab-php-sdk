
# Create Metered Component

## Structure

`CreateMeteredComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `meteredComponent` | [`MeteredComponent`](../../doc/models/metered-component.md) | Required | - | getMeteredComponent(): MeteredComponent | setMeteredComponent(MeteredComponent meteredComponent): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateMeteredComponentBuilder;
use AdvancedBillingLib\Models\Builders\MeteredComponentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\Builders\ComponentPricePointItemBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$createMeteredComponent = CreateMeteredComponentBuilder::init(
    MeteredComponentBuilder::init(
        'name0',
        'unit_name2',
        PricingScheme::STAIRSTEP
    )
        ->description('description0')
        ->handle('handle6')
        ->taxable(false)
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
        ->pricePoints(
            [
                ComponentPricePointItemBuilder::init()
                    ->name('name2')
                    ->handle('handle8')
                    ->pricingScheme(PricingScheme::PER_UNIT)
                    ->interval(92)
                    ->intervalUnit(IntervalUnit::DAY)
                    ->build(),
                ComponentPricePointItemBuilder::init()
                    ->name('name2')
                    ->handle('handle8')
                    ->pricingScheme(PricingScheme::PER_UNIT)
                    ->interval(92)
                    ->intervalUnit(IntervalUnit::DAY)
                    ->build(),
                ComponentPricePointItemBuilder::init()
                    ->name('name2')
                    ->handle('handle8')
                    ->pricingScheme(PricingScheme::PER_UNIT)
                    ->interval(92)
                    ->intervalUnit(IntervalUnit::DAY)
                    ->build()
            ]
        )
        ->build()
)->build();
```

