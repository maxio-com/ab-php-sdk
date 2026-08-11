
# Event Based Billing Segment Errors Exception

## Structure

`EventBasedBillingSegmentErrorsException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | `?array` | Optional | The key of the object would be a number (an index in the request array) where the error occurred. In the value object, the key represents the field and the value is an array with error messages. In most cases, this object would contain just one key. | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
try {
    // make the API call
} catch (EventBasedBillingSegmentErrorsException $exp) {
    echo 'Caught EventBasedBillingSegmentErrorsException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

