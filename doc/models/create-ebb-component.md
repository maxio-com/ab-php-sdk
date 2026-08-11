
# Create EBB Component

## Structure

`CreateEBBComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `eventBasedComponent` | [`EBBComponent`](../../doc/models/ebb-component.md) | Required | - | getEventBasedComponent(): EBBComponent | setEventBasedComponent(EBBComponent eventBasedComponent): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateEBBComponentBuilder;
use AdvancedBillingLib\Models\Builders\EBBComponentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\Builders\ComponentPricePointItemBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$createEBBComponent = CreateEBBComponentBuilder::init(
    EBBComponentBuilder::init(
        'name8',
        'unit_name0',
        PricingScheme::STAIRSTEP,
        68
    )
        ->description('description8')
        ->handle('handle4')
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
                    ->build()
            ]
        )
        ->build()
)->build();
```

