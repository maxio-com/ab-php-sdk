
# Cancellation Options

## Structure

`CancellationOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cancellationMessage` | `?string` | Optional | For your internal use. An indication as to why the subscription is being canceled. | getCancellationMessage(): ?string | setCancellationMessage(?string cancellationMessage): void |
| `reasonCode` | `?string` | Optional | The reason code associated with the cancellation. See the list of reason codes associated with your site. | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |

## Example (as JSON)

```json
{
  "cancellation_message": "cancellation_message0",
  "reason_code": "reason_code6"
}
```

