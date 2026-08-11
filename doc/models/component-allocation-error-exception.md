
# Component Allocation Error Exception

## Structure

`ComponentAllocationErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(ComponentAllocationErrorItem[])`](../../doc/models/component-allocation-error-item.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
try {
    // make the API call
} catch (ComponentAllocationErrorException $exp) {
    echo 'Caught ComponentAllocationErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

