
# Product Price Point Response

## Structure

`ProductPricePointResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [`ProductPricePoint`](../../doc/models/product-price-point.md) | Required | - | getPricePoint(): ProductPricePoint | setPricePoint(ProductPricePoint pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProductPricePointResponseBuilder;
use AdvancedBillingLib\Models\Builders\ProductPricePointBuilder;

$productPricePointResponse = ProductPricePointResponseBuilder::init(
    ProductPricePointBuilder::init()
        ->id(248)
        ->name('name0')
        ->handle('handle6')
        ->priceInCents(196)
        ->interval(44)
        ->build()
)->build();
```

