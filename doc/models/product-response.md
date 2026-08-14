
# Product Response

## Structure

`ProductResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `product` | [`Product`](../../doc/models/product.md) | Required | - | getProduct(): Product | setProduct(Product product): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProductResponseBuilder;
use AdvancedBillingLib\Models\Builders\ProductBuilder;

$productResponse = ProductResponseBuilder::init(
    ProductBuilder::init()
        ->id(134)
        ->name('name0')
        ->handle('handle6')
        ->description('description0')
        ->accountingCode('accounting_code6')
        ->build()
)->build();
```

