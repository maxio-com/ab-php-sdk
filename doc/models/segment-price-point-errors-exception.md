
# Segment Price Point Errors Exception

Returned when a segment write targets a subscription's custom price point. Segments on a custom price point can only be set through `custom_price` on the subscription or component endpoints.

## Structure

`SegmentPricePointErrorsException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`SegmentPricePointErrorDetails`](../../doc/models/segment-price-point-error-details.md) | Required | Price-point validation error details for segment writes. | getErrors(): SegmentPricePointErrorDetails | setErrors(SegmentPricePointErrorDetails errors): void |

## Example

```php
try {
    // make the API call
} catch (SegmentPricePointErrorsException $exp) {
    echo 'Caught SegmentPricePointErrorsException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

