
# Bulk Create Segments

## Structure

`BulkCreateSegments`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segments` | [`?(CreateSegment[])`](../../doc/models/create-segment.md) | Optional | **Constraints**: *Maximum Items*: `2000` | getSegments(): ?array | setSegments(?array segments): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BulkCreateSegmentsBuilder;
use AdvancedBillingLib\Models\Builders\CreateSegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$bulkCreateSegments = BulkCreateSegmentsBuilder::init()
    ->segments(
        [
            CreateSegmentBuilder::init(
                PricingScheme::STAIRSTEP
            )
                ->segmentProperty1Value(
                    'String3'
                )
                ->segmentProperty2Value(
                    'String5'
                )
                ->segmentProperty3Value(
                    'String3'
                )
                ->segmentProperty4Value(
                    'String7'
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
                ->build()
        ]
    )
    ->build();
```

