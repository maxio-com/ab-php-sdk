
# Event Based Billing List Segments Errors Exception

## Structure

`EventBasedBillingListSegmentsErrorsException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?Errors1`](../../doc/models/errors-1.md) | Optional | - | getErrors(): ?Errors1 | setErrors(?Errors1 errors): void |

## Example

```php
try {
    // make the API call
} catch (EventBasedBillingListSegmentsErrorsException $exp) {
    echo 'Caught EventBasedBillingListSegmentsErrorsException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

