
# Item Price Point Changed

## Structure

`ItemPricePointChanged`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `itemId` | `int` | Required | - | getItemId(): int | setItemId(int itemId): void |
| `itemType` | `string` | Required | - | getItemType(): string | setItemType(string itemType): void |
| `itemHandle` | `string` | Required | - | getItemHandle(): string | setItemHandle(string itemHandle): void |
| `itemName` | `string` | Required | - | getItemName(): string | setItemName(string itemName): void |
| `previousPricePoint` | [`ItemPricePointData`](../../doc/models/item-price-point-data.md) | Required | - | getPreviousPricePoint(): ItemPricePointData | setPreviousPricePoint(ItemPricePointData previousPricePoint): void |
| `currentPricePoint` | [`ItemPricePointData`](../../doc/models/item-price-point-data.md) | Required | - | getCurrentPricePoint(): ItemPricePointData | setCurrentPricePoint(ItemPricePointData currentPricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ItemPricePointChangedBuilder;
use AdvancedBillingLib\Models\Builders\ItemPricePointDataBuilder;

$itemPricePointChanged = ItemPricePointChangedBuilder::init(
    30,
    'item_type6',
    'item_handle4',
    'item_name8',
    ItemPricePointDataBuilder::init()
        ->id(216)
        ->handle('handle6')
        ->name('name0')
        ->build(),
    ItemPricePointDataBuilder::init()
        ->id(218)
        ->handle('handle6')
        ->name('name0')
        ->build()
)->build();
```

