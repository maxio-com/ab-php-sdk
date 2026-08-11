
# Component Price Point Response

## Structure

`ComponentPricePointResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [`ComponentPricePoint`](../../doc/models/component-price-point.md) | Required | - | getPricePoint(): ComponentPricePoint | setPricePoint(ComponentPricePoint pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentPricePointResponseBuilder;
use AdvancedBillingLib\Models\Builders\ComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricePointType;
use AdvancedBillingLib\Models\PricingScheme;

$componentPricePointResponse = ComponentPricePointResponseBuilder::init(
    ComponentPricePointBuilder::init()
        ->id(248)
        ->type(PricePointType::DEFAULT_)
        ->default(false)
        ->name('name0')
        ->pricingScheme(PricingScheme::PER_UNIT)
        ->build()
)->build();
```

