
# Subscription Group Prepayment Request

## Structure

`SubscriptionGroupPrepaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayment` | [`SubscriptionGroupPrepayment`](../../doc/models/subscription-group-prepayment.md) | Required | - | getPrepayment(): SubscriptionGroupPrepayment | setPrepayment(SubscriptionGroupPrepayment prepayment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupPrepaymentRequestBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupPrepaymentBuilder;
use AdvancedBillingLib\Models\SubscriptionGroupPrepaymentMethod;

$subscriptionGroupPrepaymentRequest = SubscriptionGroupPrepaymentRequestBuilder::init(
    SubscriptionGroupPrepaymentBuilder::init(
        136,
        'details8',
        'memo2',
        SubscriptionGroupPrepaymentMethod::PAYPAL_ACCOUNT
    )->build()
)->build();
```

