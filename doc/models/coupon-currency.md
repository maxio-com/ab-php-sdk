
# Coupon Currency

## Structure

`CouponCurrency`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `price` | `?float` | Optional | - | getPrice(): ?float | setPrice(?float price): void |
| `couponId` | `?int` | Optional | - | getCouponId(): ?int | setCouponId(?int couponId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponCurrencyBuilder;

$couponCurrency = CouponCurrencyBuilder::init()
    ->id(202)
    ->currency('currency0')
    ->price(14.62)
    ->couponId(184)
    ->build();
```

