
# Event Based Billing Segment Exception

## Structure

`EventBasedBillingSegmentException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`EventBasedBillingSegmentError`](../../doc/models/event-based-billing-segment-error.md) | Required | - | getErrors(): EventBasedBillingSegmentError | setErrors(EventBasedBillingSegmentError errors): void |

## Example

```php
try {
    // make the API call
} catch (EventBasedBillingSegmentException $exp) {
    echo 'Caught EventBasedBillingSegmentException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

