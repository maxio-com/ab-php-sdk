
# List Mrr Filter

## Structure

`ListMrrFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionIds` | `?(int[])` | Optional | Submit ids in order to limit results. Use in query: `filter[subscription_ids]=1,2,3`.<br><br>**Constraints**: *Minimum Items*: `1` | getSubscriptionIds(): ?array | setSubscriptionIds(?array subscriptionIds): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListMrrFilterBuilder;

$listMrrFilter = ListMrrFilterBuilder::init()
    ->subscriptionIds(
        [
            1,
            2,
            3
        ]
    )
    ->build();
```

