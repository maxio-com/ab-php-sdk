
# Cancellation Request

## Structure

`CancellationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`CancellationOptions`](../../doc/models/cancellation-options.md) | Required | - | getSubscription(): CancellationOptions | setSubscription(CancellationOptions subscription): void |

## Example (as JSON)

```json
{
  "subscription": {
    "cancellation_message": "cancellation_message2",
    "reason_code": "reason_code8"
  }
}
```

