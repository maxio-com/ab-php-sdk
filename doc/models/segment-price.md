
# Segment Price

## Structure

`SegmentPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `startingQuantity` | `?int` | Optional | - | getStartingQuantity(): ?int | setStartingQuantity(?int startingQuantity): void |
| `endingQuantity` | `?int` | Optional | - | getEndingQuantity(): ?int | setEndingQuantity(?int endingQuantity): void |
| `unitPrice` | `?string` | Optional | - | getUnitPrice(): ?string | setUnitPrice(?string unitPrice): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `formattedUnitPrice` | `?string` | Optional | - | getFormattedUnitPrice(): ?string | setFormattedUnitPrice(?string formattedUnitPrice): void |
| `segmentId` | `?int` | Optional | - | getSegmentId(): ?int | setSegmentId(?int segmentId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SegmentPriceBuilder;

$segmentPrice = SegmentPriceBuilder::init()
    ->id(194)
    ->componentId(48)
    ->startingQuantity(144)
    ->endingQuantity(118)
    ->unitPrice('unit_price0')
    ->build();
```

