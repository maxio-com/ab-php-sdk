
# Coupon Usage

## Structure

`CouponUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Chargify id of the product | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | Name of the product | getName(): ?string | setName(?string name): void |
| `signups` | `?int` | Optional | Number of times the coupon has been applied | getSignups(): ?int | setSignups(?int signups): void |
| `savings` | `?int` | Optional | Dollar amount of customer savings as a result of the coupon. | getSavings(): ?int | setSavings(?int savings): void |
| `savingsInCents` | `?int` | Optional | Dollar amount of customer savings as a result of the coupon. | getSavingsInCents(): ?int | setSavingsInCents(?int savingsInCents): void |
| `revenue` | `?int` | Optional | Total revenue of all subscriptions that have received a discount from this coupon. | getRevenue(): ?int | setRevenue(?int revenue): void |
| `revenueInCents` | `?int` | Optional | Total revenue of all subscriptions that have received a discount from this coupon. | getRevenueInCents(): ?int | setRevenueInCents(?int revenueInCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponUsageBuilder;

$couponUsage = CouponUsageBuilder::init()
    ->id(240)
    ->name('name8')
    ->signups(4)
    ->savings(22)
    ->savingsInCents(108)
    ->build();
```

