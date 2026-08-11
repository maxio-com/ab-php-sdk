
# Scheduled Renewal Item Request Body Component

## Structure

`ScheduledRenewalItemRequestBodyComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `itemType` | `string` | Required, Constant | Item type to add. Either Product or Component.<br><br>**Value**: `'Component'` | getItemType(): string | setItemType(string itemType): void |
| `itemId` | `int` | Required | Product or component identifier. | getItemId(): int | setItemId(int itemId): void |
| `pricePointId` | `?int` | Optional | Price point identifier. | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `quantity` | `?int` | Optional | (Optional) Quantity for the item. | getQuantity(): ?int | setQuantity(?int quantity): void |
| `customPrice` | [`?ScheduledRenewalComponentCustomPrice`](../../doc/models/scheduled-renewal-component-custom-price.md) | Optional | Custom pricing for a component within a scheduled renewal. | getCustomPrice(): ?ScheduledRenewalComponentCustomPrice | setCustomPrice(?ScheduledRenewalComponentCustomPrice customPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalItemRequestBodyComponentBuilder;
use AdvancedBillingLib\Models\Builders\ScheduledRenewalComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;

$scheduledRenewalItemRequestBodyComponent = ScheduledRenewalItemRequestBodyComponentBuilder::init(
    20
)
    ->pricePointId(6)
    ->quantity(84)
    ->customPrice(
        ScheduledRenewalComponentCustomPriceBuilder::init(
            PricingScheme::STAIRSTEP,
            [
                PriceBuilder::init(
                    242,
                    23.26
                )
                    ->endingQuantity(
                        40
                    )
                    ->build(),
                PriceBuilder::init(
                    242,
                    23.26
                )
                    ->endingQuantity(
                        40
                    )
                    ->build()
            ]
        )
            ->taxIncluded(false)
            ->build()
    )
    ->build();
```

