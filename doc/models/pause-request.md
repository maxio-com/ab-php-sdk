
# Pause Request

Allows to pause a Subscription

## Structure

`PauseRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `hold` | [`?AutoResume`](../../doc/models/auto-resume.md) | Optional | - | getHold(): ?AutoResume | setHold(?AutoResume hold): void |

## Example (as JSON)

```json
{
  "hold": {
    "automatically_resume_at": "2016-03-13T12:52:32.123Z"
  }
}
```

