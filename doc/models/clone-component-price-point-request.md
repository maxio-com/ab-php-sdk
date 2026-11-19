
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
use AdvancedBillingLib\Models\Builders\CloneFeatureCatalogItemBuilder;
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;
use AdvancedBillingLib\Models\GrantExpirationUnit;

$cloneComponentPricePointRequest = CloneComponentPricePointRequestBuilder::init(
    CloneComponentPricePointBuilder::init(
        'name0'
    )
        ->handle('handle6')
        ->featureCatalogItems(
            [
                CloneFeatureCatalogItemBuilder::init(
                    8,
                    'value4'
                )
                    ->periodicityInterval(136)
                    ->periodicityUnit(EntitlementPeriodicityUnit::HOUR)
                    ->grantExpirationInterval(60)
                    ->grantExpirationUnit(GrantExpirationUnit::MONTH)
                    ->build(),
                CloneFeatureCatalogItemBuilder::init(
                    8,
                    'value4'
                )
                    ->periodicityInterval(136)
                    ->periodicityUnit(EntitlementPeriodicityUnit::HOUR)
                    ->grantExpirationInterval(60)
                    ->grantExpirationUnit(GrantExpirationUnit::MONTH)
                    ->build(),
                CloneFeatureCatalogItemBuilder::init(
                    8,
                    'value4'
                )
                    ->periodicityInterval(136)
                    ->periodicityUnit(EntitlementPeriodicityUnit::HOUR)
                    ->grantExpirationInterval(60)
                    ->grantExpirationUnit(GrantExpirationUnit::MONTH)
                    ->build()
            ]
        )
        ->build()
)->build();
```

