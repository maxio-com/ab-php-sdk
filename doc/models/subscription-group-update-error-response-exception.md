
# Subscription Group Update Error Response Exception

## Structure

`SubscriptionGroupUpdateErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?SubscriptionGroupUpdateError`](../../doc/models/subscription-group-update-error.md) | Optional | - | getErrors(): ?SubscriptionGroupUpdateError | setErrors(?SubscriptionGroupUpdateError errors): void |

## Example

```php
try {
    // make the API call
} catch (SubscriptionGroupUpdateErrorResponseException $exp) {
    echo 'Caught SubscriptionGroupUpdateErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

