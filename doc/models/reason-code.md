
# Reason Code

## Structure

`ReasonCode`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `siteId` | `?int` | Optional | - | getSiteId(): ?int | setSiteId(?int siteId): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `position` | `?int` | Optional | - | getPosition(): ?int | setPosition(?int position): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ReasonCodeBuilder;

$reasonCode = ReasonCodeBuilder::init()
    ->id(174)
    ->siteId(100)
    ->code('code4')
    ->description('description6')
    ->position(204)
    ->build();
```

