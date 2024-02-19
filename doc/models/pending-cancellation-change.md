
# Pending Cancellation Change

## Structure

`PendingCancellationChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cancellationState` | `string` | Required | - | getCancellationState(): string | setCancellationState(string cancellationState): void |
| `cancelsAt` | `DateTime` | Required | - | getCancelsAt(): \DateTime | setCancelsAt(\DateTime cancelsAt): void |

## Example (as JSON)

```json
{
  "cancellation_state": "cancellation_state8",
  "cancels_at": "2016-03-13T12:52:32.123Z"
}
```

