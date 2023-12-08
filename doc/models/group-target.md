
# Group Target

Attributes of the target customer who will be the responsible payer of the created subscription. Required.

## Structure

`GroupTarget`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string(GroupTargetType)`](../../doc/models/group-target-type.md) | Required | The type of object indicated by the id attribute. | getType(): string | setType(string type): void |
| `id` | `?int` | Optional | The id of the target customer or subscription to group the existing subscription with. Ignored and should not be included if type is "self" , "parent", or "eldest" | getId(): ?int | setId(?int id): void |

## Example (as JSON)

```json
{
  "type": "self",
  "id": 134
}
```

