
# Create Component Price Points Request

## Structure

`CreateComponentPricePointsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | array<[CreateComponentPricePoint](../../doc/models/create-component-price-point.md)\|[CreatePrepaidUsageComponentPricePoint](../../doc/models/create-prepaid-usage-component-price-point.md)> | Required | This is Array of a container for any-of cases. | getPricePoints(): array | setPricePoints(array pricePoints): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateComponentPricePointsRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$createComponentPricePointsRequest = CreateComponentPricePointsRequestBuilder::init(
    [
        CreateComponentPricePointBuilder::init(
            'name0',
            PricingScheme::PER_UNIT,
            [
                PriceBuilder::init(
                    242,
                    23.26
                )
                    ->endingQuantity(
                        40
                    )
                    ->build(),
                PriceBuilder::init(
                    242,
                    23.26
                )
                    ->endingQuantity(
                        40
                    )
                    ->build(),
                PriceBuilder::init(
                    242,
                    23.26
                )
                    ->endingQuantity(
                        40
                    )
                    ->build()
            ]
        )
            ->handle('handle6')
            ->useSiteExchangeRate(false)
            ->taxIncluded(false)
            ->interval(24)
            ->intervalUnit(IntervalUnit::DAY)
            ->build()
    ]
)->build();
```

