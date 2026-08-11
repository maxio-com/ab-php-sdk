
# Single String Error Response Exception

## Structure

`SingleStringErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | `?string` | Optional | - | getErrors(): ?string | setErrors(?string errors): void |

## Example

```php
try {
    // make the API call
} catch (SingleStringErrorResponseException $exp) {
    echo 'Caught SingleStringErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

