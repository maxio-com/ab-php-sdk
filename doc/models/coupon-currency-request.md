
# Coupon Currency Request

## Structure

`CouponCurrencyRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`UpdateCouponCurrency[]`](../../doc/models/update-coupon-currency.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponCurrencyRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateCouponCurrencyBuilder;

$couponCurrencyRequest = CouponCurrencyRequestBuilder::init(
    [
        UpdateCouponCurrencyBuilder::init(
            'currency8',
            78
        )->build()
    ]
)->build();
```

