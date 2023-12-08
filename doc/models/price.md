
# Price

## Structure

`Price`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startingQuantity` | int\|string | Required | This is a container for one-of cases. | getStartingQuantity(): | setStartingQuantity( startingQuantity): void |
| `endingQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getEndingQuantity(): | setEndingQuantity( endingQuantity): void |
| `unitPrice` | float\|string | Required | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |

## Example (as JSON)

```json
{
  "starting_quantity": 40,
  "ending_quantity": 14,
  "unit_price": 125.12
}
```

