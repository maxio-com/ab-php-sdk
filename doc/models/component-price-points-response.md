
# Component Price Points Response

## Structure

`ComponentPricePointsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | [`?(ComponentPricePoint[])`](../../doc/models/component-price-point.md) | Optional | - | getPricePoints(): ?array | setPricePoints(?array pricePoints): void |
| `meta` | [`?ListPublicKeysMeta`](../../doc/models/list-public-keys-meta.md) | Optional | - | getMeta(): ?ListPublicKeysMeta | setMeta(?ListPublicKeysMeta meta): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentPricePointsResponseBuilder;
use AdvancedBillingLib\Models\Builders\ComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricePointType;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\ListPublicKeysMetaBuilder;

$componentPricePointsResponse = ComponentPricePointsResponseBuilder::init()
    ->pricePoints(
        [
            ComponentPricePointBuilder::init()
                ->id(40)
                ->type(PricePointType::DEFAULT_)
                ->default(false)
                ->name('name2')
                ->pricingScheme(PricingScheme::PER_UNIT)
                ->build(),
            ComponentPricePointBuilder::init()
                ->id(40)
                ->type(PricePointType::DEFAULT_)
                ->default(false)
                ->name('name2')
                ->pricingScheme(PricingScheme::PER_UNIT)
                ->build(),
            ComponentPricePointBuilder::init()
                ->id(40)
                ->type(PricePointType::DEFAULT_)
                ->default(false)
                ->name('name2')
                ->pricingScheme(PricingScheme::PER_UNIT)
                ->build()
        ]
    )
    ->meta(
        ListPublicKeysMetaBuilder::init()
            ->totalCount(150)
            ->currentPage(126)
            ->totalPages(138)
            ->perPage(152)
            ->build()
    )
    ->build();
```

