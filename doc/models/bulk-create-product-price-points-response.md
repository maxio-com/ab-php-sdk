
# Bulk Create Product Price Points Response

## Structure

`BulkCreateProductPricePointsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | [`?(ProductPricePoint[])`](../../doc/models/product-price-point.md) | Optional | - | getPricePoints(): ?array | setPricePoints(?array pricePoints): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BulkCreateProductPricePointsResponseBuilder;
use AdvancedBillingLib\Models\Builders\ProductPricePointBuilder;

$bulkCreateProductPricePointsResponse = BulkCreateProductPricePointsResponseBuilder::init()
    ->pricePoints(
        [
            ProductPricePointBuilder::init()
                ->id(40)
                ->name('name2')
                ->handle('handle8')
                ->priceInCents(108)
                ->interval(92)
                ->build(),
            ProductPricePointBuilder::init()
                ->id(40)
                ->name('name2')
                ->handle('handle8')
                ->priceInCents(108)
                ->interval(92)
                ->build(),
            ProductPricePointBuilder::init()
                ->id(40)
                ->name('name2')
                ->handle('handle8')
                ->priceInCents(108)
                ->interval(92)
                ->build()
        ]
    )
    ->build();
```

