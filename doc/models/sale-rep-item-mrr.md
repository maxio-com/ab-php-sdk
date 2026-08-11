
# Sale Rep Item Mrr

## Structure

`SaleRepItemMrr`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mrr` | `?string` | Optional | - | getMrr(): ?string | setMrr(?string mrr): void |
| `usage` | `?string` | Optional | - | getUsage(): ?string | setUsage(?string usage): void |
| `recurring` | `?string` | Optional | - | getRecurring(): ?string | setRecurring(?string recurring): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SaleRepItemMrrBuilder;

$saleRepItemMrr = SaleRepItemMrrBuilder::init()
    ->mrr('mrr8')
    ->usage('usage0')
    ->recurring('recurring6')
    ->build();
```

