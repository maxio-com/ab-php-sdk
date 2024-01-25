
# Currency Prices Response

## Structure

`CurrencyPricesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`CurrencyPrice[]`](../../doc/models/currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example (as JSON)

```json
{
  "currency_prices": [
    {
      "id": 50,
      "currency": "currency8",
      "price": 233.74,
      "formatted_price": "formatted_price6",
      "product_price_point_id": 172
    }
  ]
}
```

