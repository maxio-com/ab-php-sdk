
# Create Currency Price

## Structure

`CreateCurrencyPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | `?string` | Optional | ISO code for a currency defined on the site level | getCurrency(): ?string | setCurrency(?string currency): void |
| `price` | `?int` | Optional | Price for the price level in this currency | getPrice(): ?int | setPrice(?int price): void |
| `priceId` | `?int` | Optional | ID of the price that this corresponds with | getPriceId(): ?int | setPriceId(?int priceId): void |

## Example (as JSON)

```json
{
  "currency": "currency2",
  "price": 16,
  "price_id": 54
}
```

