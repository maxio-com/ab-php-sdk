
# Coupon Request

## Structure

`CouponRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `coupon` | [`?CouponPayload`](../../doc/models/coupon-payload.md) | Optional | - | getCoupon(): ?CouponPayload | setCoupon(?CouponPayload coupon): void |
| `restrictedProducts` | `?array<string,bool>` | Optional | An object where the keys are product IDs or handles (prefixed with 'handle:'), and the values are booleans indicating if the coupon should be applicable to the product. | getRestrictedProducts(): ?array | setRestrictedProducts(?array restrictedProducts): void |
| `restrictedComponents` | `?array<string,bool>` | Optional | An object where the keys are component IDs or handles (prefixed with 'handle:'), and the values are booleans indicating if the coupon should be applicable to the component. | getRestrictedComponents(): ?array | setRestrictedComponents(?array restrictedComponents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponRequestBuilder;
use AdvancedBillingLib\Models\Builders\CouponPayloadBuilder;

$couponRequest = CouponRequestBuilder::init()
    ->coupon(
        CouponPayloadBuilder::init()
            ->name('name4')
            ->code('code2')
            ->description('description6')
            ->percentage(
                'String3'
            )
            ->amountInCents(230)
            ->build()
    )
    ->restrictedProducts(
        [
            'key0' => true,
            'key1' => false
        ]
    )
    ->restrictedComponents(
        [
            'key0' => true,
            'key1' => false
        ]
    )
    ->build();
```

