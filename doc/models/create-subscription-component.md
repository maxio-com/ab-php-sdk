
# Create Subscription Component

## Structure

`CreateSubscriptionComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | int\|string\|null | Optional | This is a container for one-of cases. | getComponentId(): | setComponentId( componentId): void |
| `enabled` | `?bool` | Optional | Used for on/off components only. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `unitBalance` | `?int` | Optional | Used for metered and events based components. | getUnitBalance(): ?int | setUnitBalance(?int unitBalance): void |
| `allocatedQuantity` | `?int` | Optional | Used for quantity based components. | getAllocatedQuantity(): ?int | setAllocatedQuantity(?int allocatedQuantity): void |
| `quantity` | `?int` | Optional | Deprecated. Use `allocated_quantity` instead. | getQuantity(): ?int | setQuantity(?int quantity): void |
| `pricePointId` | int\|string\|null | Optional | This is a container for one-of cases. | getPricePointId(): | setPricePointId( pricePointId): void |
| `customPrice` | [`?ComponentCustomPrice`](../../doc/models/component-custom-price.md) | Optional | Create or update custom pricing unique to the subscription. Used in place of `price_point_id`. | getCustomPrice(): ?ComponentCustomPrice | setCustomPrice(?ComponentCustomPrice customPrice): void |

## Example (as JSON)

```json
{
  "component_id": 8,
  "enabled": false,
  "unit_balance": 144,
  "allocated_quantity": 180,
  "quantity": 188
}
```

