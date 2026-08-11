
# Clone Component Price Point Request

## Structure

`CloneComponentPricePointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [`CloneComponentPricePoint`](../../doc/models/clone-component-price-point.md) | Required | - | getPricePoint(): CloneComponentPricePoint | setPricePoint(CloneComponentPricePoint pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CloneComponentPricePointRequestBuilder;
use AdvancedBillingLib\Models\Builders\CloneComponentPricePointBuilder;

$cloneComponentPricePointRequest = CloneComponentPricePointRequestBuilder::init(
    CloneComponentPricePointBuilder::init(
        'name0'
    )
        ->handle('handle6')
        ->build()
)->build();
```

