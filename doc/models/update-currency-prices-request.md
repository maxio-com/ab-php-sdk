
# Update Currency Prices Request

## Structure

`UpdateCurrencyPricesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`UpdateCurrencyPrice[]`](../../doc/models/update-currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example (as JSON)

```json
{
  "currency_prices": [
    {
      "id": 50,
      "price": 78
    }
  ]
}
```

