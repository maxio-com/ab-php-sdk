
# Create Segment

## Structure

`CreateSegment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segmentProperty1Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty1Value(): | setSegmentProperty1Value( segmentProperty1Value): void |
| `segmentProperty2Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty2Value(): | setSegmentProperty2Value( segmentProperty2Value): void |
| `segmentProperty3Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty3Value(): | setSegmentProperty3Value( segmentProperty3Value): void |
| `segmentProperty4Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty4Value(): | setSegmentProperty4Value( segmentProperty4Value): void |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(CreateOrUpdateSegmentPrice[])`](../../doc/models/create-or-update-segment-price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateSegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$createSegment = CreateSegmentBuilder::init(
    PricingScheme::STAIRSTEP
)
    ->segmentProperty1Value(
        'String7'
    )
    ->segmentProperty2Value(
        'String9'
    )
    ->segmentProperty3Value(
        'String5'
    )
    ->segmentProperty4Value(
        'String1'
    )
    ->prices(
        [
            CreateOrUpdateSegmentPriceBuilder::init(
                'String3'
            )
                ->startingQuantity(64)
                ->endingQuantity(38)
                ->build(),
            CreateOrUpdateSegmentPriceBuilder::init(
                'String3'
            )
                ->startingQuantity(64)
                ->endingQuantity(38)
                ->build()
        ]
    )
    ->build();
```

