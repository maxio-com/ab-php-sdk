
# Subscription Group Update Error Response Exception

## Structure

`SubscriptionGroupUpdateErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?SubscriptionGroupUpdateError`](../../doc/models/subscription-group-update-error.md) | Optional | - | getErrors(): ?SubscriptionGroupUpdateError | setErrors(?SubscriptionGroupUpdateError errors): void |

## Example (as JSON)

```json
{
  "errors": {
    "members": [
      {
        "id": 204,
        "type": "type2",
        "message": "message8"
      },
      {
        "id": 204,
        "type": "type2",
        "message": "message8"
      }
    ]
  }
}
```

