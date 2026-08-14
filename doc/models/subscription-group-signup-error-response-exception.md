
# Subscription Group Signup Error Response Exception

## Structure

`SubscriptionGroupSignupErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`SubscriptionGroupSignupError`](../../doc/models/subscription-group-signup-error.md) | Required | - | getErrors(): SubscriptionGroupSignupError | setErrors(SubscriptionGroupSignupError errors): void |

## Example

```php
try {
    // make the API call
} catch (SubscriptionGroupSignupErrorResponseException $exp) {
    echo 'Caught SubscriptionGroupSignupErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

