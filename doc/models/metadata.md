
# Metadata

## Structure

`Metadata`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `value` | `?string` | Optional | - | getValue(): ?string | setValue(?string value): void |
| `resourceId` | `?int` | Optional | - | getResourceId(): ?int | setResourceId(?int resourceId): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `deletedAt` | `?DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `metafieldId` | `?int` | Optional | - | getMetafieldId(): ?int | setMetafieldId(?int metafieldId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MetadataBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$metadata = MetadataBuilder::init()
    ->id(50)
    ->value('value8')
    ->resourceId(134)
    ->name('name6')
    ->deletedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

