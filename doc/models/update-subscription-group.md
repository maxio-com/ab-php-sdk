
# Update Subscription Group

## Structure

`UpdateSubscriptionGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `memberIds` | `?(int[])` | Optional | - | getMemberIds(): ?array | setMemberIds(?array memberIds): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionGroupBuilder;

$updateSubscriptionGroup = UpdateSubscriptionGroupBuilder::init()
    ->memberIds(
        [
            248,
            249,
            250
        ]
    )
    ->build();
```

