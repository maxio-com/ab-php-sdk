
# Invoice Line Item Event Data

## Structure

`InvoiceLineItemEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `quantityDelta` | `?int` | Optional | - | getQuantityDelta(): ?int | setQuantityDelta(?int quantityDelta): void |
| `unitPrice` | `?string` | Optional | - | getUnitPrice(): ?string | setUnitPrice(?string unitPrice): void |
| `periodRangeStart` | `?string` | Optional | - | getPeriodRangeStart(): ?string | setPeriodRangeStart(?string periodRangeStart): void |
| `periodRangeEnd` | `?string` | Optional | - | getPeriodRangeEnd(): ?string | setPeriodRangeEnd(?string periodRangeEnd): void |
| `amount` | `?string` | Optional | - | getAmount(): ?string | setAmount(?string amount): void |
| `lineReferences` | `?string` | Optional | - | getLineReferences(): ?string | setLineReferences(?string lineReferences): void |
| `pricingDetailsIndex` | `?int` | Optional | - | getPricingDetailsIndex(): ?int | setPricingDetailsIndex(?int pricingDetailsIndex): void |
| `pricingDetails` | [`?(InvoiceLineItemPricingDetail[])`](../../doc/models/invoice-line-item-pricing-detail.md) | Optional | - | getPricingDetails(): ?array | setPricingDetails(?array pricingDetails): void |
| `taxCode` | `?string` | Optional | - | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `taxAmount` | `?string` | Optional | - | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `billingScheduleItemId` | `?int` | Optional | - | getBillingScheduleItemId(): ?int | setBillingScheduleItemId(?int billingScheduleItemId): void |
| `customItem` | `?bool` | Optional | - | getCustomItem(): ?bool | setCustomItem(?bool customItem): void |

## Example (as JSON)

```json
{
  "uid": "uid4",
  "title": "title0",
  "description": "description6",
  "quantity": 40,
  "quantity_delta": 114
}
```

