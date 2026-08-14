
# List Subscription Group Prepayment Response

## Structure

`ListSubscriptionGroupPrepaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayments` | [`ListSubscriptionGroupPrepayment[]`](../../doc/models/list-subscription-group-prepayment.md) | Required | - | getPrepayments(): array | setPrepayments(array prepayments): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupPrepaymentResponseBuilder;
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupPrepaymentBuilder;
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupPrepaymentItemBuilder;

$listSubscriptionGroupPrepaymentResponse = ListSubscriptionGroupPrepaymentResponseBuilder::init(
    [
        ListSubscriptionGroupPrepaymentBuilder::init(
            ListSubscriptionGroupPrepaymentItemBuilder::init()
                ->id(38)
                ->subscriptionGroupUid('subscription_group_uid2')
                ->amountInCents(124)
                ->remainingAmountInCents(182)
                ->details('details8')
                ->build()
        )->build()
    ]
)->build();
```

