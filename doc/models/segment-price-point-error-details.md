
# Segment Price Point Error Details

Price-point validation error details for segment writes.

## Structure

`SegmentPricePointErrorDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | `string[]` | Required | - | getPricePoint(): array | setPricePoint(array pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SegmentPricePointErrorDetailsBuilder;

$segmentPricePointErrorDetails = SegmentPricePointErrorDetailsBuilder::init(
    [
        'price_point2'
    ]
)->build();
```

