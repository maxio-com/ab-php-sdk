
# Create Product Family Request

## Structure

`CreateProductFamilyRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productFamily` | [`CreateProductFamily`](../../doc/models/create-product-family.md) | Required | - | getProductFamily(): CreateProductFamily | setProductFamily(CreateProductFamily productFamily): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateProductFamilyRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateProductFamilyBuilder;

$createProductFamilyRequest = CreateProductFamilyRequestBuilder::init(
    CreateProductFamilyBuilder::init(
        'name0'
    )
        ->handle('handle6')
        ->description('description0')
        ->surcharging(false)
        ->build()
)->build();
```

