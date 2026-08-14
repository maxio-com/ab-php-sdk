
# Update Subscription Note

Updatable fields for Subscription Note

## Structure

`UpdateSubscriptionNote`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `body` | `string` | Required | - | getBody(): string | setBody(string body): void |
| `sticky` | `bool` | Required | - | getSticky(): bool | setSticky(bool sticky): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionNoteBuilder;

$updateSubscriptionNote = UpdateSubscriptionNoteBuilder::init(
    'body2',
    false
)->build();
```

