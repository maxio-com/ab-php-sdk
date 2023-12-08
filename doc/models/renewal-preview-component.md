
# Renewal Preview Component

## Structure

`RenewalPreviewComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | string\|int\|null | Optional | This is a container for one-of cases. | getComponentId(): | setComponentId( componentId): void |
| `quantity` | `?int` | Optional | The quantity for which you wish to preview billing. This is useful if you want to preview a predicted, higher usage value than is currently present on the subscription.<br><br>This quantity represents:<br><br>- Whether or not an on/off component is enabled - use 0 for disabled or 1 for enabled<br>- The desired allocated_quantity for a quantity-based component<br>- The desired unit_balance for a metered component<br>- The desired metric quantity for an events-based component | getQuantity(): ?int | setQuantity(?int quantity): void |
| `pricePointId` | string\|int\|null | Optional | This is a container for one-of cases. | getPricePointId(): | setPricePointId( pricePointId): void |

## Example (as JSON)

```json
{
  "component_id": "String7",
  "quantity": 174,
  "price_point_id": "String1"
}
```

