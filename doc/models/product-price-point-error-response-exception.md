
# Product Price Point Error Response Exception

## Structure

`ProductPricePointErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`ProductPricePointErrors`](../../doc/models/product-price-point-errors.md) | Required | - | getErrors(): ProductPricePointErrors | setErrors(ProductPricePointErrors errors): void |

## Example

```php
try {
    // make the API call
} catch (ProductPricePointErrorResponseException $exp) {
    echo 'Caught ProductPricePointErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

