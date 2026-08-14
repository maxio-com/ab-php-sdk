
# Update Segment

## Structure

`UpdateSegment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(CreateOrUpdateSegmentPrice[])`](../../doc/models/create-or-update-segment-price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateSegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$updateSegment = UpdateSegmentBuilder::init(
    PricingScheme::STAIRSTEP
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

