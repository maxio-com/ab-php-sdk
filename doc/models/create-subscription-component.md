
# Create Subscription Component

## Structure

`CreateSubscriptionComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | int\|string\|null | Optional | This is a container for one-of cases. | getComponentId(): | setComponentId( componentId): void |
| `enabled` | `?bool` | Optional | Used for on/off components only. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `unitBalance` | int\|string\|null | Optional | This is a container for one-of cases. | getUnitBalance(): | setUnitBalance( unitBalance): void |
| `allocatedQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getAllocatedQuantity(): | setAllocatedQuantity( allocatedQuantity): void |
| `quantity` | `?int` | Optional | Deprecated. Use `allocated_quantity` instead. | getQuantity(): ?int | setQuantity(?int quantity): void |
| `pricePointId` | int\|string\|null | Optional | This is a container for one-of cases. | getPricePointId(): | setPricePointId( pricePointId): void |
| `customPrice` | [`?ComponentCustomPrice`](../../doc/models/component-custom-price.md) | Optional | Create or update custom pricing unique to the subscription. Used in place of `price_point_id`. | getCustomPrice(): ?ComponentCustomPrice | setCustomPrice(?ComponentCustomPrice customPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateSubscriptionComponentBuilder;

$createSubscriptionComponent = CreateSubscriptionComponentBuilder::init()
    ->componentId(
        210
    )
    ->enabled(false)
    ->unitBalance(
        12
    )
    ->allocatedQuantity(
        48
    )
    ->quantity(134)
    ->build();
```

