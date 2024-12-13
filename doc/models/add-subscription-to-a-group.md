
# Add Subscription to a Group

## Structure

`AddSubscriptionToAGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `group` | [`?GroupSettings`](../../doc/models/group-settings.md) | Optional | - | getGroup(): ?GroupSettings | setGroup(?GroupSettings group): void |

## Example (as JSON)

```json
{
  "group": {
    "target": {
      "type": "parent",
      "id": 236
    },
    "billing": {
      "accrue": false,
      "align_date": false,
      "prorate": false
    }
  }
}
```

