
# List Components Price Points Response

## Structure

`ListComponentsPricePointsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | [`ComponentPricePoint[]`](../../doc/models/component-price-point.md) | Required | - | getPricePoints(): array | setPricePoints(array pricePoints): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListComponentsPricePointsResponseBuilder;
use AdvancedBillingLib\Models\Builders\ComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricePointType;
use AdvancedBillingLib\Models\PricingScheme;

$listComponentsPricePointsResponse = ListComponentsPricePointsResponseBuilder::init(
    [
        ComponentPricePointBuilder::init()
            ->id(40)
            ->type(PricePointType::DEFAULT_)
            ->default(false)
            ->name('name2')
            ->pricingScheme(PricingScheme::PER_UNIT)
            ->build()
    ]
)->build();
```

