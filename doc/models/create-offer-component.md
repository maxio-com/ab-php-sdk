
# Create Offer Component

## Structure

`CreateOfferComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `startingQuantity` | `?int` | Optional | - | getStartingQuantity(): ?int | setStartingQuantity(?int startingQuantity): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateOfferComponentBuilder;

$createOfferComponent = CreateOfferComponentBuilder::init()
    ->componentId(252)
    ->pricePointId(20)
    ->startingQuantity(196)
    ->build();
```

