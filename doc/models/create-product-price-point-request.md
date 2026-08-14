
# Create Product Price Point Request

## Structure

`CreateProductPricePointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [`CreateProductPricePoint`](../../doc/models/create-product-price-point.md) | Required | - | getPricePoint(): CreateProductPricePoint | setPricePoint(CreateProductPricePoint pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateProductPricePointRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateProductPricePointBuilder;
use AdvancedBillingLib\Models\IntervalUnit;
use AdvancedBillingLib\Models\TrialType;

$createProductPricePointRequest = CreateProductPricePointRequestBuilder::init(
    CreateProductPricePointBuilder::init(
        'name0',
        196,
        44,
        IntervalUnit::DAY
    )
        ->handle('handle6')
        ->trialPriceInCents(108)
        ->trialInterval(202)
        ->trialIntervalUnit(IntervalUnit::DAY)
        ->trialType(TrialType::NO_OBLIGATION)
        ->useSiteExchangeRate(true)
        ->build()
)->build();
```

