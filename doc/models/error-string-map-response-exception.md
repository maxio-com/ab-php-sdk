
# Error String Map Response Exception

## Structure

`ErrorStringMapResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | `?array<string,string>` | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
try {
    // make the API call
} catch (ErrorStringMapResponseException $exp) {
    echo 'Caught ErrorStringMapResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

