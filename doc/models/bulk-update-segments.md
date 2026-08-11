
# Bulk Update Segments

## Structure

`BulkUpdateSegments`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segments` | [`?(BulkUpdateSegmentsItem[])`](../../doc/models/bulk-update-segments-item.md) | Optional | **Constraints**: *Maximum Items*: `1000` | getSegments(): ?array | setSegments(?array segments): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BulkUpdateSegmentsBuilder;
use AdvancedBillingLib\Models\Builders\BulkUpdateSegmentsItemBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$bulkUpdateSegments = BulkUpdateSegmentsBuilder::init()
    ->segments(
        [
            BulkUpdateSegmentsItemBuilder::init(
                50,
                PricingScheme::STAIRSTEP,
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
            )->build(),
            BulkUpdateSegmentsItemBuilder::init(
                50,
                PricingScheme::STAIRSTEP,
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
            )->build()
        ]
    )->build();
```

