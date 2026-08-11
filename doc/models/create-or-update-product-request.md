
# Create or Update Product Request

## Structure

`CreateOrUpdateProductRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `product` | [`CreateOrUpdateProduct`](../../doc/models/create-or-update-product.md) | Required | - | getProduct(): CreateOrUpdateProduct | setProduct(CreateOrUpdateProduct product): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateOrUpdateProductRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateProductBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$createOrUpdateProductRequest = CreateOrUpdateProductRequestBuilder::init(
    CreateOrUpdateProductBuilder::init(
        'name0',
        'description0',
        54,
        186,
        IntervalUnit::DAY
    )
        ->handle('handle6')
        ->accountingCode('accounting_code6')
        ->requireCreditCard(false)
        ->trialPriceInCents(34)
        ->trialInterval(88)
        ->build()
)->build();
```

