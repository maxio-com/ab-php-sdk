
# Create Subscription Group Request

## Structure

`CreateSubscriptionGroupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroup` | [`CreateSubscriptionGroup`](../../doc/models/create-subscription-group.md) | Required | - | getSubscriptionGroup(): CreateSubscriptionGroup | setSubscriptionGroup(CreateSubscriptionGroup subscriptionGroup): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateSubscriptionGroupRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateSubscriptionGroupBuilder;

$createSubscriptionGroupRequest = CreateSubscriptionGroupRequestBuilder::init(
    CreateSubscriptionGroupBuilder::init(
        36
    )
        ->memberIds(
            [
                164,
                165
            ]
        )
        ->build()
)->build();
```

