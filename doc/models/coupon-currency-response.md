
# Coupon Currency Response

## Structure

`CouponCurrencyResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`?(CouponCurrency[])`](../../doc/models/coupon-currency.md) | Optional | - | getCurrencyPrices(): ?array | setCurrencyPrices(?array currencyPrices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponCurrencyResponseBuilder;
use AdvancedBillingLib\Models\Builders\CouponCurrencyBuilder;

$couponCurrencyResponse = CouponCurrencyResponseBuilder::init()
    ->currencyPrices(
        [
            CouponCurrencyBuilder::init()
                ->id(50)
                ->currency('currency8')
                ->price(233.74)
                ->couponId(224)
                ->build()
        ]
    )
    ->build();
```

