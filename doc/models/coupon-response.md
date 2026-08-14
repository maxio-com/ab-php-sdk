
# Coupon Response

## Structure

`CouponResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `coupon` | [`?Coupon`](../../doc/models/coupon.md) | Optional | - | getCoupon(): ?Coupon | setCoupon(?Coupon coupon): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponResponseBuilder;
use AdvancedBillingLib\Models\Builders\CouponBuilder;

$couponResponse = CouponResponseBuilder::init()
    ->coupon(
        CouponBuilder::init()
            ->id(196)
            ->name('name4')
            ->code('code2')
            ->description('description6')
            ->amount(97.66)
            ->build()
    )
    ->build();
```

