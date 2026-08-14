
# Bulk Update Segments Item

## Structure

`BulkUpdateSegmentsItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | The ID of the segment you want to update. | getId(): int | setId(int id): void |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`CreateOrUpdateSegmentPrice[]`](../../doc/models/create-or-update-segment-price.md) | Required | - | getPrices(): array | setPrices(array prices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BulkUpdateSegmentsItemBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$bulkUpdateSegmentsItem = BulkUpdateSegmentsItemBuilder::init(
    220,
    PricingScheme::PER_UNIT,
    [
        CreateOrUpdateSegmentPriceBuilder::init(
            'String3'
        )
            ->startingQuantity(64)
            ->endingQuantity(38)
            ->build()
    ]
)->build();
```

