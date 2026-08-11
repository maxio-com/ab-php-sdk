
# Component Price

## Structure

`ComponentPrice`

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
use AdvancedBillingLib\Models\Builders\ComponentPriceBuilder;

$componentPrice = ComponentPriceBuilder::init()
    ->id(18)
    ->componentId(128)
    ->startingQuantity(64)
    ->endingQuantity(218)
    ->unitPrice('unit_price4')
    ->build();
```

