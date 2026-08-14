
# Update Component Price Point Request

## Structure

`UpdateComponentPricePointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [`?UpdateComponentPricePoint`](../../doc/models/update-component-price-point.md) | Optional | - | getPricePoint(): ?UpdateComponentPricePoint | setPricePoint(?UpdateComponentPricePoint pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateComponentPricePointRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricingScheme;

$updateComponentPricePointRequest = UpdateComponentPricePointRequestBuilder::init()
    ->pricePoint(
        UpdateComponentPricePointBuilder::init()
            ->name('name0')
            ->handle('handle6')
            ->pricingScheme(PricingScheme::PER_UNIT)
            ->useSiteExchangeRate(false)
            ->taxIncluded(false)
            ->build()
    )
    ->build();
```

