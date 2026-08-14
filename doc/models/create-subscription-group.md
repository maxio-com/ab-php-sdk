
# Create Subscription Group

## Structure

`CreateSubscriptionGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `memberIds` | `?(int[])` | Optional | - | getMemberIds(): ?array | setMemberIds(?array memberIds): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateSubscriptionGroupBuilder;

$createSubscriptionGroup = CreateSubscriptionGroupBuilder::init(
    204
)
    ->memberIds(
        [
            48
        ]
    )
    ->build();
```

