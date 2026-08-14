
# List Sale Rep Item

## Structure

`ListSaleRepItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `fullName` | `?string` | Optional | - | getFullName(): ?string | setFullName(?string fullName): void |
| `subscriptionsCount` | `?int` | Optional | - | getSubscriptionsCount(): ?int | setSubscriptionsCount(?int subscriptionsCount): void |
| `mrrData` | [`?array<string,SaleRepItemMrr>`](../../doc/models/sale-rep-item-mrr.md) | Optional | - | getMrrData(): ?array | setMrrData(?array mrrData): void |
| `testMode` | `?bool` | Optional | - | getTestMode(): ?bool | setTestMode(?bool testMode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSaleRepItemBuilder;
use AdvancedBillingLib\Models\Builders\SaleRepItemMrrBuilder;

$listSaleRepItem = ListSaleRepItemBuilder::init()
    ->id(54)
    ->fullName('full_name2')
    ->subscriptionsCount(126)
    ->mrrData(
        [
            'november_2019' => SaleRepItemMrrBuilder::init()
                ->mrr('$0.00')
                ->usage('$0.00')
                ->recurring('$0.00')
                ->build(),
            'december_2019' => SaleRepItemMrrBuilder::init()
                ->mrr('$0.00')
                ->usage('$0.00')
                ->recurring('$0.00')
                ->build(),
            'january_2020' => SaleRepItemMrrBuilder::init()
                ->mrr('$400.00')
                ->usage('$0.00')
                ->recurring('$400.00')
                ->build()
        ]
    )
    ->testMode(false)
    ->build();
```

