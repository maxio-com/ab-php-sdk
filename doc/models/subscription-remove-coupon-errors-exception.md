
# Subscription Remove Coupon Errors Exception

## Structure

`SubscriptionRemoveCouponErrorsException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | `string[]` | Required | - | getSubscription(): array | setSubscription(array subscription): void |

## Example

```php
try {
    // make the API call
} catch (SubscriptionRemoveCouponErrorsException $exp) {
    echo 'Caught SubscriptionRemoveCouponErrorsException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

