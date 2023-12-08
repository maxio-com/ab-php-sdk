
# Create or Update Segment Price

## Structure

`CreateOrUpdateSegmentPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startingQuantity` | `?int` | Optional | - | getStartingQuantity(): ?int | setStartingQuantity(?int startingQuantity): void |
| `endingQuantity` | `?int` | Optional | - | getEndingQuantity(): ?int | setEndingQuantity(?int endingQuantity): void |
| `unitPrice` | string\|float | Required | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |

## Example (as JSON)

```json
{
  "starting_quantity": 78,
  "ending_quantity": 52,
  "unit_price": "String7"
}
```

