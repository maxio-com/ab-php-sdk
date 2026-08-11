
# Subscription Response Error Exception

## Structure

`SubscriptionResponseErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`?Subscription`](../../doc/models/subscription.md) | Optional | - | getSubscription(): ?Subscription | setSubscription(?Subscription subscription): void |

## Example

```php
try {
    // make the API call
} catch (SubscriptionResponseErrorException $exp) {
    echo 'Caught SubscriptionResponseErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

