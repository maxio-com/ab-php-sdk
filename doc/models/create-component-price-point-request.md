
# Create Component Price Point Request

## Structure

`CreateComponentPricePointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [CreateComponentPricePoint](../../doc/models/create-component-price-point.md)\|[CreatePrepaidUsageComponentPricePoint](../../doc/models/create-prepaid-usage-component-price-point.md) | Required | This is a container for any-of cases. | getPricePoint(): | setPricePoint( pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateComponentPricePointRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$createComponentPricePointRequest = CreateComponentPricePointRequestBuilder::init(
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
                ->build()
        ]
    )
        ->handle('handle6')
        ->useSiteExchangeRate(true)
        ->taxIncluded(false)
        ->interval(24)
        ->intervalUnit(IntervalUnit::DAY)
        ->build()
)->build();
```

