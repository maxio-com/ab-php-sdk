
# Subscription Group Members Array Error

## Structure

`SubscriptionGroupMembersArrayError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `members` | `string[]` | Required | - | getMembers(): array | setMembers(array members): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupMembersArrayErrorBuilder;

$subscriptionGroupMembersArrayError = SubscriptionGroupMembersArrayErrorBuilder::init(
    [
        'members6'
    ]
)->build();
```

