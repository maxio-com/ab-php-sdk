
# Error List Response Exception

Error which contains list of messages.

## Structure

`ErrorListResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | `string[]` | Required | - | getErrors(): array | setErrors(array errors): void |

## Example

```php
try {
    // make the API call
} catch (ErrorListResponseException $exp) {
    echo 'Caught ErrorListResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

