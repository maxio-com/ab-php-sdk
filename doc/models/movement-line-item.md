
# Movement Line Item

## Structure

`MovementLineItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `componentId` | `?int` | Optional | For Product (or "baseline") line items, this field will have a value of `0`. | getComponentId(): ?int | setComponentId(?int componentId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `mrr` | `?int` | Optional | - | getMrr(): ?int | setMrr(?int mrr): void |
| `mrrMovements` | [`?(MRRMovement[])`](../../doc/models/mrr-movement.md) | Optional | - | getMrrMovements(): ?array | setMrrMovements(?array mrrMovements): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `prevQuantity` | `?int` | Optional | - | getPrevQuantity(): ?int | setPrevQuantity(?int prevQuantity): void |
| `recurring` | `?bool` | Optional | When `true`, the line item's MRR value will contribute to the `plan` breakout. When `false`, the line item contributes to the `usage` breakout. | getRecurring(): ?bool | setRecurring(?bool recurring): void |

## Example (as JSON)

```json
{
  "product_id": 156,
  "component_id": 68,
  "price_point_id": 164,
  "name": "name6",
  "mrr": 154
}
```

