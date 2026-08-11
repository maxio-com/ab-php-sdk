
# Subscription Group Prepayment

## Structure

`SubscriptionGroupPrepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `details` | `string` | Required | - | getDetails(): string | setDetails(string details): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `method` | [`string(SubscriptionGroupPrepaymentMethod)`](../../doc/models/subscription-group-prepayment-method.md) | Required | - | getMethod(): string | setMethod(string method): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupPrepaymentBuilder;
use AdvancedBillingLib\Models\SubscriptionGroupPrepaymentMethod;

$subscriptionGroupPrepayment = SubscriptionGroupPrepaymentBuilder::init(
    12,
    'details4',
    'memo8',
    SubscriptionGroupPrepaymentMethod::MONEY_ORDER
)->build();
```

