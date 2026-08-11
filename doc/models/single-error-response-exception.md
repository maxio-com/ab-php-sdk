
# Single Error Response Exception

## Structure

`SingleErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `error` | `string` | Required | - | getError(): string | setError(string error): void |

## Example

```php
try {
    // make the API call
} catch (SingleErrorResponseException $exp) {
    echo 'Caught SingleErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

