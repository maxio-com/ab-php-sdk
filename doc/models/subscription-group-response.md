
# Subscription Group Response

## Structure

`SubscriptionGroupResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroup` | [`SubscriptionGroup`](../../doc/models/subscription-group.md) | Required | - | getSubscriptionGroup(): SubscriptionGroup | setSubscriptionGroup(SubscriptionGroup subscriptionGroup): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupResponseBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupPaymentProfileBuilder;
use AdvancedBillingLib\Models\CollectionMethod;

$subscriptionGroupResponse = SubscriptionGroupResponseBuilder::init(
    SubscriptionGroupBuilder::init()
        ->uid('uid8')
        ->customerId(220)
        ->paymentProfile(
            SubscriptionGroupPaymentProfileBuilder::init()
                ->id(44)
                ->firstName('first_name4')
                ->lastName('last_name2')
                ->maskedCardNumber('masked_card_number2')
                ->build()
        )
        ->paymentCollectionMethod(CollectionMethod::PREPAID)
        ->subscriptionIds(
            [
                74,
                75
            ]
        )
        ->build()
)->build();
```

