
# Create Segment Request

## Structure

`CreateSegmentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segment` | [`CreateSegment`](../../doc/models/create-segment.md) | Required | - | getSegment(): CreateSegment | setSegment(CreateSegment segment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateSegmentRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateSegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$createSegmentRequest = CreateSegmentRequestBuilder::init(
    CreateSegmentBuilder::init(
        PricingScheme::STAIRSTEP
    )
        ->segmentProperty1Value(
            'String1'
        )
        ->segmentProperty2Value(
            'String3'
        )
        ->segmentProperty3Value(
            'String1'
        )
        ->segmentProperty4Value(
            'String5'
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
)->build();
```

