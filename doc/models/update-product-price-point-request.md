
# Update Product Price Point Request

## Structure

`UpdateProductPricePointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [`UpdateProductPricePoint`](../../doc/models/update-product-price-point.md) | Required | - | getPricePoint(): UpdateProductPricePoint | setPricePoint(UpdateProductPricePoint pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateProductPricePointRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateProductPricePointBuilder;

$updateProductPricePointRequest = UpdateProductPricePointRequestBuilder::init(
    UpdateProductPricePointBuilder::init()
        ->handle('handle6')
        ->priceInCents(196)
        ->build()
)->build();
```

