
# Update Subscription Note Request

Updatable fields for Subscription Note

## Structure

`UpdateSubscriptionNoteRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `note` | [`UpdateSubscriptionNote`](../../doc/models/update-subscription-note.md) | Required | Updatable fields for Subscription Note | getNote(): UpdateSubscriptionNote | setNote(UpdateSubscriptionNote note): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionNoteRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionNoteBuilder;

$updateSubscriptionNoteRequest = UpdateSubscriptionNoteRequestBuilder::init(
    UpdateSubscriptionNoteBuilder::init(
        'body0',
        false
    )->build()
)->build();
```

