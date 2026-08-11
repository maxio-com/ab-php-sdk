
# Subscription Group Update Error

## Structure

`SubscriptionGroupUpdateError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `members` | `?(string[])` | Optional | - | getMembers(): ?array | setMembers(?array members): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupUpdateErrorBuilder;

$subscriptionGroupUpdateError = SubscriptionGroupUpdateErrorBuilder::init()
    ->members(
        [
            'members6',
            'members7'
        ]
    )
    ->build();
```

