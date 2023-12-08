
# Create Currency Prices Request

## Structure

`CreateCurrencyPricesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`CreateCurrencyPrice[]`](../../doc/models/create-currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example (as JSON)

```json
{
  "currency_prices": [
    {
      "currency": "currency8",
      "price": 78,
      "price_id": 116
    }
  ]
}
```

