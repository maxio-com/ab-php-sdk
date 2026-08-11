
# List Product Price Points Response

## Structure

`ListProductPricePointsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | [`ProductPricePoint[]`](../../doc/models/product-price-point.md) | Required | - | getPricePoints(): array | setPricePoints(array pricePoints): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListProductPricePointsResponseBuilder;
use AdvancedBillingLib\Models\Builders\ProductPricePointBuilder;

$listProductPricePointsResponse = ListProductPricePointsResponseBuilder::init(
    [
        ProductPricePointBuilder::init()
            ->id(40)
            ->name('name2')
            ->handle('handle8')
            ->priceInCents(108)
            ->interval(92)
            ->build()
    ]
)->build();
```

