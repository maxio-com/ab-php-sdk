
# Product Family Response

## Structure

`ProductFamilyResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productFamily` | [`?ProductFamily`](../../doc/models/product-family.md) | Optional | - | getProductFamily(): ?ProductFamily | setProductFamily(?ProductFamily productFamily): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProductFamilyResponseBuilder;
use AdvancedBillingLib\Models\Builders\ProductFamilyBuilder;

$productFamilyResponse = ProductFamilyResponseBuilder::init()
    ->productFamily(
        ProductFamilyBuilder::init()
            ->id(14)
            ->name('name0')
            ->handle('handle6')
            ->accountingCode('accounting_code6')
            ->description('description0')
            ->build()
    )
    ->build();
```

