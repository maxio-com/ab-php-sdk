
# Subscription Add Coupon Error Exception

## Structure

`SubscriptionAddCouponErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codes` | `?(string[])` | Optional | - | getCodes(): ?array | setCodes(?array codes): void |
| `couponCode` | `?(string[])` | Optional | - | getCouponCode(): ?array | setCouponCode(?array couponCode): void |
| `couponCodes` | `?(string[])` | Optional | - | getCouponCodes(): ?array | setCouponCodes(?array couponCodes): void |
| `subscription` | `?(string[])` | Optional | - | getSubscription(): ?array | setSubscription(?array subscription): void |

## Example

```php
try {
    // make the API call
} catch (SubscriptionAddCouponErrorException $exp) {
    echo 'Caught SubscriptionAddCouponErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

