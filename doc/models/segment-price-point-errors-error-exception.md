
# Segment Price Point Errors Error Exception

Returned when a segment write targets a subscription's custom price point. Segments on a custom price point can only be set through `custom_price` on the subscription or component endpoints.

## Structure

`SegmentPricePointErrorsErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`Errors`](../../doc/models/errors.md) | Required | - | getErrors(): Errors | setErrors(Errors errors): void |

## Example

```php
try {
    // make the API call
} catch (SegmentPricePointErrorsErrorException $exp) {
    echo 'Caught SegmentPricePointErrorsErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

