
# Coupon Currency Response

## Structure

`CouponCurrencyResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`?(CouponCurrency[])`](../../doc/models/coupon-currency.md) | Optional | - | getCurrencyPrices(): ?array | setCurrencyPrices(?array currencyPrices): void |

## Example (as JSON)

```json
{
  "currency_prices": [
    {
      "id": 50,
      "currency": "currency8",
      "price": 233.74,
      "coupon_id": 224
    },
    {
      "id": 50,
      "currency": "currency8",
      "price": 233.74,
      "coupon_id": 224
    },
    {
      "id": 50,
      "currency": "currency8",
      "price": 233.74,
      "coupon_id": 224
    }
  ]
}
```

