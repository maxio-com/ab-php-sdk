
# Customer Error Response Exception

## Structure

`CustomerErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [CustomerError](../../doc/models/customer-error.md)\|string[]\|null | Optional | This is a container for one-of cases. | getErrors(): | setErrors( errors): void |

## Example

```php
try {
    // make the API call
} catch (CustomerErrorResponseException $exp) {
    echo 'Caught CustomerErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

