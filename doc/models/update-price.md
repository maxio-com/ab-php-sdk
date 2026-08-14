
# Update Price

## Structure

`UpdatePrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `endingQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getEndingQuantity(): | setEndingQuantity( endingQuantity): void |
| `unitPrice` | float\|string\|null | Optional | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |
| `destroy` | `?bool` | Optional | - | getDestroy(): ?bool | setDestroy(?bool destroy): void |
| `startingQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getStartingQuantity(): | setStartingQuantity( startingQuantity): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdatePriceBuilder;

$updatePrice = UpdatePriceBuilder::init()
    ->id(206)
    ->endingQuantity(
        28
    )
    ->unitPrice(
        181.3
    )
    ->destroy(false)
    ->startingQuantity(
        54
    )
    ->build();
```

