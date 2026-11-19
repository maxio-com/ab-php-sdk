
# Clone Component Price Point

## Structure

`CloneComponentPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `featureCatalogItems` | [`?(CloneFeatureCatalogItem[])`](../../doc/models/clone-feature-catalog-item.md) | Optional | The features the clone gets. The clone does not copy the source price point's features, so send every feature it should have. | getFeatureCatalogItems(): ?array | setFeatureCatalogItems(?array featureCatalogItems): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CloneComponentPricePointBuilder;
use AdvancedBillingLib\Models\Builders\CloneFeatureCatalogItemBuilder;
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;
use AdvancedBillingLib\Models\GrantExpirationUnit;

$cloneComponentPricePoint = CloneComponentPricePointBuilder::init(
    'name4'
)
    ->handle('handle0')
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
                ->build()
        ]
    )
    ->build();
```

