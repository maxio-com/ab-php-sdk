
# Event Based Billing Segment Write Error Response Exception

Errors returned when creating or updating a single segment. Validation problems use the per-field error map; a write to a subscription's custom price point returns a `price_point` error.

## Structure

`EventBasedBillingSegmentWriteErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | `?array` | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
try {
    // make the API call
} catch (EventBasedBillingSegmentWriteErrorResponseException $exp) {
    echo 'Caught EventBasedBillingSegmentWriteErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

