
# Create Currency Price

## Structure

`CreateCurrencyPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | `?string` | Optional | ISO code for a currency defined on the site level | getCurrency(): ?string | setCurrency(?string currency): void |
| `price` | `?float` | Optional | Price for the price level in this currency | getPrice(): ?float | setPrice(?float price): void |
| `priceId` | `?int` | Optional | ID of the price that this corresponds with | getPriceId(): ?int | setPriceId(?int priceId): void |

## Example (as JSON)

```json
{
  "currency": "currency2",
  "price": 10.4,
  "price_id": 54
}
```

