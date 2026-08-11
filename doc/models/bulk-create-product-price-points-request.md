
# Bulk Create Product Price Points Request

## Structure

`BulkCreateProductPricePointsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | [`CreateProductPricePoint[]`](../../doc/models/create-product-price-point.md) | Required | - | getPricePoints(): array | setPricePoints(array pricePoints): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BulkCreateProductPricePointsRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateProductPricePointBuilder;
use AdvancedBillingLib\Models\IntervalUnit;
use AdvancedBillingLib\Models\TrialType;

$bulkCreateProductPricePointsRequest = BulkCreateProductPricePointsRequestBuilder::init(
    [
        CreateProductPricePointBuilder::init(
            'name2',
            108,
            92,
            IntervalUnit::DAY
        )
            ->handle('handle8')
            ->trialPriceInCents(196)
            ->trialInterval(250)
            ->trialIntervalUnit(IntervalUnit::DAY)
            ->trialType(TrialType::NO_OBLIGATION)
            ->useSiteExchangeRate(true)
            ->build()
    ]
)->build();
```

