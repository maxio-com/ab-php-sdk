
# Component Currency Prices Response

## Structure

`ComponentCurrencyPricesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`ComponentCurrencyPrice[]`](../../doc/models/component-currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example (as JSON)

```json
{
  "currency_prices": [
    {
      "id": 50,
      "currency": "currency8",
      "price": "price4",
      "formatted_price": "formatted_price6",
      "price_id": 116
    }
  ]
}
```

