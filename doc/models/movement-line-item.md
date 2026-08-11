
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

## Example

```php
use AdvancedBillingLib\Models\Builders\MovementLineItemBuilder;

$movementLineItem = MovementLineItemBuilder::init()
    ->productId(146)
    ->componentId(58)
    ->pricePointId(82)
    ->name('name8')
    ->mrr(92)
    ->build();
```

