
# Subscription Group Single Error

## Structure

`SubscriptionGroupSingleError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroup` | `string` | Required | - | getSubscriptionGroup(): string | setSubscriptionGroup(string subscriptionGroup): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSingleErrorBuilder;

$subscriptionGroupSingleError = SubscriptionGroupSingleErrorBuilder::init(
    'subscription_group0'
)->build();
```

