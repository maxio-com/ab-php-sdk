
# Subscription Note

## Structure

`SubscriptionNote`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `body` | `?string` | Optional | - | getBody(): ?string | setBody(?string body): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `sticky` | `?bool` | Optional | - | getSticky(): ?bool | setSticky(?bool sticky): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionNoteBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$subscriptionNote = SubscriptionNoteBuilder::init()
    ->id(18)
    ->body('body6')
    ->subscriptionId(128)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->updatedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

