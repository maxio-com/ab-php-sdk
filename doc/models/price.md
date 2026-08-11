
# Price

## Structure

`Price`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startingQuantity` | int\|string | Required | This is a container for one-of cases. | getStartingQuantity(): | setStartingQuantity( startingQuantity): void |
| `endingQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getEndingQuantity(): | setEndingQuantity( endingQuantity): void |
| `unitPrice` | float\|string | Required | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PriceBuilder;

$price = PriceBuilder::init(
    132,
    70.44
)
    ->endingQuantity(
        6
    )
    ->build();
```

