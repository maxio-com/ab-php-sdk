
# Component Cost Data Rate Tier

## Structure

`ComponentCostDataRateTier`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startingQuantity` | `?int` | Optional | - | getStartingQuantity(): ?int | setStartingQuantity(?int startingQuantity): void |
| `endingQuantity` | `?int` | Optional | - | getEndingQuantity(): ?int | setEndingQuantity(?int endingQuantity): void |
| `quantity` | `?string` | Optional | - | getQuantity(): ?string | setQuantity(?string quantity): void |
| `unitPrice` | `?string` | Optional | - | getUnitPrice(): ?string | setUnitPrice(?string unitPrice): void |
| `amount` | `?string` | Optional | - | getAmount(): ?string | setAmount(?string amount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentCostDataRateTierBuilder;

$componentCostDataRateTier = ComponentCostDataRateTierBuilder::init()
    ->startingQuantity(204)
    ->endingQuantity(178)
    ->quantity('quantity4')
    ->unitPrice('unit_price6')
    ->amount('amount0')
    ->build();
```

