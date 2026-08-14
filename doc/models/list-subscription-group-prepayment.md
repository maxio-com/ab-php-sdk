
# List Subscription Group Prepayment

## Structure

`ListSubscriptionGroupPrepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayment` | [`ListSubscriptionGroupPrepaymentItem`](../../doc/models/list-subscription-group-prepayment-item.md) | Required | - | getPrepayment(): ListSubscriptionGroupPrepaymentItem | setPrepayment(ListSubscriptionGroupPrepaymentItem prepayment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupPrepaymentBuilder;
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupPrepaymentItemBuilder;

$listSubscriptionGroupPrepayment = ListSubscriptionGroupPrepaymentBuilder::init(
    ListSubscriptionGroupPrepaymentItemBuilder::init()
        ->id(38)
        ->subscriptionGroupUid('subscription_group_uid2')
        ->amountInCents(124)
        ->remainingAmountInCents(182)
        ->details('details8')
        ->build()
)->build();
```

