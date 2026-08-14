
# List Segments Response

## Structure

`ListSegmentsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segments` | [`?(Segment[])`](../../doc/models/segment.md) | Optional | - | getSegments(): ?array | setSegments(?array segments): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSegmentsResponseBuilder;
use AdvancedBillingLib\Models\Builders\SegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;

$listSegmentsResponse = ListSegmentsResponseBuilder::init()
    ->segments(
        [
            SegmentBuilder::init()
                ->id(50)
                ->componentId(160)
                ->pricePointId(184)
                ->eventBasedBillingMetricId(244)
                ->pricingScheme(PricingScheme::STAIRSTEP)
                ->build(),
            SegmentBuilder::init()
                ->id(50)
                ->componentId(160)
                ->pricePointId(184)
                ->eventBasedBillingMetricId(244)
                ->pricingScheme(PricingScheme::STAIRSTEP)
                ->build()
        ]
    )
    ->build();
```

