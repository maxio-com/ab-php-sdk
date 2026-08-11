
# Event Response

## Structure

`EventResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `event` | [`Event`](../../doc/models/event.md) | Required | - | getEvent(): Event | setEvent(Event event): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\EventResponseBuilder;
use AdvancedBillingLib\Models\Builders\EventBuilder;
use AdvancedBillingLib\Models\EventKey;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\SubscriptionProductChangeBuilder;

$eventResponse = EventResponseBuilder::init(
    EventBuilder::init(
        242,
        EventKey::SUBSCRIPTION_REMOVED_FROM_GROUP,
        'message0',
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )
        ->subscriptionId(96)
        ->customerId(24)
        ->eventSpecificData(
            SubscriptionProductChangeBuilder::init(
                126,
                12
            )->build()
        )->build()
)->build();
```

