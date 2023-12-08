
# Custom Field Value Change

## Structure

`CustomFieldValueChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `eventType` | `string` | Required | - | getEventType(): string | setEventType(string eventType): void |
| `metafieldName` | `string` | Required | - | getMetafieldName(): string | setMetafieldName(string metafieldName): void |
| `metafieldId` | `int` | Required | - | getMetafieldId(): int | setMetafieldId(int metafieldId): void |
| `oldValue` | `?string` | Required | - | getOldValue(): ?string | setOldValue(?string oldValue): void |
| `newValue` | `?string` | Required | - | getNewValue(): ?string | setNewValue(?string newValue): void |
| `resourceType` | `string` | Required | - | getResourceType(): string | setResourceType(string resourceType): void |
| `resourceId` | `int` | Required | - | getResourceId(): int | setResourceId(int resourceId): void |

## Example (as JSON)

```json
{
  "event_type": "event_type2",
  "metafield_name": "metafield_name6",
  "metafield_id": 78,
  "old_value": "old_value2",
  "new_value": "new_value8",
  "resource_type": "resource_type2",
  "resource_id": 74
}
```

