
# Create or Update Segment Price

## Structure

`CreateOrUpdateSegmentPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startingQuantity` | `?int` | Optional | - | getStartingQuantity(): ?int | setStartingQuantity(?int startingQuantity): void |
| `endingQuantity` | `?int` | Optional | - | getEndingQuantity(): ?int | setEndingQuantity(?int endingQuantity): void |
| `unitPrice` | string\|float | Required | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$createOrUpdateSegmentPrice = CreateOrUpdateSegmentPriceBuilder::init(
    'String9'
)
    ->startingQuantity(98)
    ->endingQuantity(184)
    ->build();
```

