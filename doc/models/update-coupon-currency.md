
# Update Coupon Currency

## Structure

`UpdateCouponCurrency`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | `string` | Required | ISO code for the site defined currency. | getCurrency(): string | setCurrency(string currency): void |
| `price` | `int` | Required | Price for the given currency. | getPrice(): int | setPrice(int price): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateCouponCurrencyBuilder;

$updateCouponCurrency = UpdateCouponCurrencyBuilder::init(
    'currency4',
    100
)->build();
```

