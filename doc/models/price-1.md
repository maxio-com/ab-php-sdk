
# Price 1

## Structure

`Price1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startingQuantity` | `?int` | Optional | - | getStartingQuantity(): ?int | setStartingQuantity(?int startingQuantity): void |
| `endingQuantity` | `?int` | Optional | - | getEndingQuantity(): ?int | setEndingQuantity(?int endingQuantity): void |
| `unitPrice` | `?string` | Optional | - | getUnitPrice(): ?string | setUnitPrice(?string unitPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\Price1Builder;

$price1 = Price1Builder::init()
    ->startingQuantity(138)
    ->endingQuantity(112)
    ->unitPrice('unit_price8')
    ->build();
```

