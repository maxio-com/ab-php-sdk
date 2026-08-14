
# Update Segment Request

## Structure

`UpdateSegmentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segment` | [`UpdateSegment`](../../doc/models/update-segment.md) | Required | - | getSegment(): UpdateSegment | setSegment(UpdateSegment segment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateSegmentRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateSegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$updateSegmentRequest = UpdateSegmentRequestBuilder::init(
    UpdateSegmentBuilder::init(
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
        ->build()
)->build();
```

