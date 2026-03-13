
# Scheduled Renewal Item Request Body Component

## Structure

`ScheduledRenewalItemRequestBodyComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `itemType` | `string` | Required, Constant | Item type to add. Either Product or Component.<br><br>**Value**: `'Component'` | getItemType(): string | setItemType(string itemType): void |
| `itemId` | `int` | Required | Product or component identifier. | getItemId(): int | setItemId(int itemId): void |
| `pricePointId` | `?int` | Optional | Price point identifier. | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `quantity` | `?int` | Optional | Optional quantity for the item. | getQuantity(): ?int | setQuantity(?int quantity): void |
| `customPrice` | [`?ScheduledRenewalComponentCustomPrice`](../../doc/models/scheduled-renewal-component-custom-price.md) | Optional | Custom pricing for a component within a scheduled renewal. | getCustomPrice(): ?ScheduledRenewalComponentCustomPrice | setCustomPrice(?ScheduledRenewalComponentCustomPrice customPrice): void |

## Example (as JSON)

```json
{
  "item_type": "Component",
  "item_id": 108,
  "price_point_id": 122,
  "quantity": 212,
  "custom_price": {
    "tax_included": false,
    "pricing_scheme": "stairstep",
    "prices": [
      {
        "starting_quantity": 242,
        "ending_quantity": 40,
        "unit_price": 23.26
      },
      {
        "starting_quantity": 242,
        "ending_quantity": 40,
        "unit_price": 23.26
      }
    ]
  }
}
```

