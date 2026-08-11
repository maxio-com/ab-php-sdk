
# Segment Response

## Structure

`SegmentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segment` | [`?Segment`](../../doc/models/segment.md) | Optional | - | getSegment(): ?Segment | setSegment(?Segment segment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SegmentResponseBuilder;
use AdvancedBillingLib\Models\Builders\SegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;

$segmentResponse = SegmentResponseBuilder::init()
    ->segment(
        SegmentBuilder::init()
            ->id(118)
            ->componentId(228)
            ->pricePointId(4)
            ->eventBasedBillingMetricId(56)
            ->pricingScheme(PricingScheme::STAIRSTEP)
            ->build()
    )
    ->build();
```

