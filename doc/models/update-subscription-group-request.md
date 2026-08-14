
# Update Subscription Group Request

## Structure

`UpdateSubscriptionGroupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroup` | [`UpdateSubscriptionGroup`](../../doc/models/update-subscription-group.md) | Required | - | getSubscriptionGroup(): UpdateSubscriptionGroup | setSubscriptionGroup(UpdateSubscriptionGroup subscriptionGroup): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionGroupRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionGroupBuilder;

$updateSubscriptionGroupRequest = UpdateSubscriptionGroupRequestBuilder::init(
    UpdateSubscriptionGroupBuilder::init()
        ->memberIds(
            [
                164,
                165
            ]
        )
        ->build()
)->build();
```

