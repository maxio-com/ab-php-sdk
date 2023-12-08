
# Currency Price

## Structure

`CurrencyPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `price` | `?float` | Optional | - | getPrice(): ?float | setPrice(?float price): void |
| `formattedPrice` | `?string` | Optional | - | getFormattedPrice(): ?string | setFormattedPrice(?string formattedPrice): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `role` | [`?string(CurrencyPriceRole)`](../../doc/models/currency-price-role.md) | Optional | Role for the price. | getRole(): ?string | setRole(?string role): void |

## Example (as JSON)

```json
{
  "id": 88,
  "currency": "currency6",
  "price": 41.36,
  "formatted_price": "formatted_price4",
  "product_price_point_id": 210
}
```

