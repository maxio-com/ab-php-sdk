
# Proforma Bad Request Error Response Exception

## Structure

`ProformaBadRequestErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?ProformaError`](../../doc/models/proforma-error.md) | Optional | - | getErrors(): ?ProformaError | setErrors(?ProformaError errors): void |

## Example

```php
try {
    // make the API call
} catch (ProformaBadRequestErrorResponseException $exp) {
    echo 'Caught ProformaBadRequestErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

