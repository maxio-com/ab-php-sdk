
# Event Based Billing List Segments Errors Exception

## Structure

`EventBasedBillingListSegmentsErrorsException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?Errors`](../../doc/models/errors.md) | Optional | - | getErrors(): ?Errors | setErrors(?Errors errors): void |

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

