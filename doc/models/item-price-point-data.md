
# Item Price Point Data

## Structure

`ItemPricePointData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ItemPricePointDataBuilder;

$itemPricePointData = ItemPricePointDataBuilder::init()
    ->id(80)
    ->handle('handle8')
    ->name('name2')
    ->build();
```

