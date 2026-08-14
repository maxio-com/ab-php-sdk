
# Scheduled Renewal Item Request Body Product

## Structure

`ScheduledRenewalItemRequestBodyProduct`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `itemType` | `string` | Required, Constant | Item type to add. Either Product or Component.<br><br>**Value**: `'Product'` | getItemType(): string | setItemType(string itemType): void |
| `itemId` | `int` | Required | Product or component identifier. | getItemId(): int | setItemId(int itemId): void |
| `pricePointId` | `?int` | Optional | Price point identifier. | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `quantity` | `?int` | Optional | (Optional) Quantity for the item. | getQuantity(): ?int | setQuantity(?int quantity): void |
| `customPrice` | [`?ScheduledRenewalProductPricePoint`](../../doc/models/scheduled-renewal-product-price-point.md) | Optional | Custom pricing for a product within a scheduled renewal. | getCustomPrice(): ?ScheduledRenewalProductPricePoint | setCustomPrice(?ScheduledRenewalProductPricePoint customPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalItemRequestBodyProductBuilder;
use AdvancedBillingLib\Models\Builders\ScheduledRenewalProductPricePointBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$scheduledRenewalItemRequestBodyProduct = ScheduledRenewalItemRequestBodyProductBuilder::init(
    154
)
    ->pricePointId(168)
    ->quantity(166)
    ->customPrice(
        ScheduledRenewalProductPricePointBuilder::init(
            'String3',
            'String3'
        )
            ->name('name4')
            ->handle('handle0')
            ->intervalUnit(IntervalUnit::DAY)
            ->taxIncluded(false)
            ->initialChargeInCents(30)
            ->expirationInterval(52)
            ->build()
    )
    ->build();
```

