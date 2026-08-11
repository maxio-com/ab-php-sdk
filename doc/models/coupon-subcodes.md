
# Coupon Subcodes

## Structure

`CouponSubcodes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codes` | `?(string[])` | Optional | - | getCodes(): ?array | setCodes(?array codes): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponSubcodesBuilder;

$couponSubcodes = CouponSubcodesBuilder::init()
    ->codes(
        [
            'codes8',
            'codes9'
        ]
    )
    ->build();
```

