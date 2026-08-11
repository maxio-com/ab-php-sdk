
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

## Example

```php
use AdvancedBillingLib\Models\Builders\CustomFieldValueChangeBuilder;

$customFieldValueChange = CustomFieldValueChangeBuilder::init(
    'event_type8',
    'metafield_name2',
    138,
    'resource_type6',
    14
)
    ->oldValue('old_value6')
    ->newValue('new_value2')
    ->build();
```

