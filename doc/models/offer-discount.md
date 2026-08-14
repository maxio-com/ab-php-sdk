
# Offer Discount

## Structure

`OfferDiscount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `couponCode` | `?string` | Optional | - | getCouponCode(): ?string | setCouponCode(?string couponCode): void |
| `couponId` | `?int` | Optional | - | getCouponId(): ?int | setCouponId(?int couponId): void |
| `couponName` | `?string` | Optional | - | getCouponName(): ?string | setCouponName(?string couponName): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OfferDiscountBuilder;

$offerDiscount = OfferDiscountBuilder::init()
    ->couponCode('coupon_code6')
    ->couponId(202)
    ->couponName('coupon_name6')
    ->build();
```

