
# Subscription Included Coupon

## Structure

`SubscriptionIncludedCoupon`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `useCount` | `?int` | Optional | - | getUseCount(): ?int | setUseCount(?int useCount): void |
| `usesAllowed` | `?int` | Optional | - | getUsesAllowed(): ?int | setUsesAllowed(?int usesAllowed): void |
| `expiresAt` | `?string` | Optional | - | getExpiresAt(): ?string | setExpiresAt(?string expiresAt): void |
| `recurring` | `?bool` | Optional | - | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `amountInCents` | `?int` | Optional | **Constraints**: `>= 0` | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `percentage` | `?string` | Optional | - | getPercentage(): ?string | setPercentage(?string percentage): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionIncludedCouponBuilder;

$subscriptionIncludedCoupon = SubscriptionIncludedCouponBuilder::init()
    ->code('"ABCD_10"')
    ->useCount(2)
    ->usesAllowed(10)
    ->expiresAt('"2023-07-13T05:18:58-04:00"')
    ->recurring(false)
    ->amountInCents(1000)
    ->percentage('"15.0"')
    ->build();
```

