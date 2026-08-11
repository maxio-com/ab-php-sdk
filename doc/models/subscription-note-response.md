
# Subscription Note Response

## Structure

`SubscriptionNoteResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `note` | [`SubscriptionNote`](../../doc/models/subscription-note.md) | Required | - | getNote(): SubscriptionNote | setNote(SubscriptionNote note): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionNoteResponseBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionNoteBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$subscriptionNoteResponse = SubscriptionNoteResponseBuilder::init(
    SubscriptionNoteBuilder::init()
        ->id(28)
        ->body('body0')
        ->subscriptionId(138)
        ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->updatedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->build()
)->build();
```

