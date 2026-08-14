
# List Subscription Groups Meta

## Structure

`ListSubscriptionGroupsMeta`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currentPage` | `?int` | Optional | - | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `totalCount` | `?int` | Optional | - | getTotalCount(): ?int | setTotalCount(?int totalCount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupsMetaBuilder;

$listSubscriptionGroupsMeta = ListSubscriptionGroupsMetaBuilder::init()
    ->currentPage(104)
    ->totalCount(128)
    ->build();
```

