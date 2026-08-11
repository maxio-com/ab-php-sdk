
# Override Subscription Request

## Structure

`OverrideSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`OverrideSubscription`](../../doc/models/override-subscription.md) | Required | - | getSubscription(): OverrideSubscription | setSubscription(OverrideSubscription subscription): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OverrideSubscriptionRequestBuilder;
use AdvancedBillingLib\Models\Builders\OverrideSubscriptionBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$overrideSubscriptionRequest = OverrideSubscriptionRequestBuilder::init(
    OverrideSubscriptionBuilder::init()
        ->activatedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->canceledAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->cancellationMessage('cancellation_message2')
        ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->currentPeriodStartsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->build()
)->build();
```

