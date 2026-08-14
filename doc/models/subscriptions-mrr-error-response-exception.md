
# Subscriptions Mrr Error Response Exception

## Structure

`SubscriptionsMrrErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`AttributeError`](../../doc/models/attribute-error.md) | Required | - | getErrors(): AttributeError | setErrors(AttributeError errors): void |

## Example

```php
try {
    // make the API call
} catch (SubscriptionsMrrErrorResponseException $exp) {
    echo 'Caught SubscriptionsMrrErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

