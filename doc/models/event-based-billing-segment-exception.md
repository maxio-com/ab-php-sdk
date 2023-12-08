
# Event Based Billing Segment Exception

## Structure

`EventBasedBillingSegmentException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`EventBasedBillingSegmentError`](../../doc/models/event-based-billing-segment-error.md) | Required | - | getErrors(): EventBasedBillingSegmentError | setErrors(EventBasedBillingSegmentError errors): void |

## Example (as JSON)

```json
{
  "errors": {
    "segments": {
      "key0": {
        "key1": "val1",
        "key2": "val2"
      }
    }
  }
}
```

