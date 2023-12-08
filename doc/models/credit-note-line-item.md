
# Credit Note Line Item

## Structure

`CreditNoteLineItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | Unique identifier for the line item.  Useful when cross-referencing the line against individual discounts in the `discounts` or `taxes` lists. | getUid(): ?string | setUid(?string uid): void |
| `title` | `?string` | Optional | A short descriptor for the credit given by this line. | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | Detailed description for the credit given by this line.  May include proration details in plain text.<br><br>Note: this string may contain line breaks that are hints for the best display format on the credit note. | getDescription(): ?string | setDescription(?string description): void |
| `quantity` | `?string` | Optional | The quantity or count of units credited by the line item.<br><br>This is a decimal number represented as a string. (See "About Decimal Numbers".) | getQuantity(): ?string | setQuantity(?string quantity): void |
| `unitPrice` | `?string` | Optional | The price per unit for the line item.<br><br>When tiered pricing was used (i.e. not every unit was actually priced at the same price) this will be the blended average cost per unit and the `tiered_unit_price` field will be set to `true`. | getUnitPrice(): ?string | setUnitPrice(?string unitPrice): void |
| `subtotalAmount` | `?string` | Optional | The line subtotal, generally calculated as `quantity * unit_price`. This is the canonical amount of record for the line - when rounding differences are in play, `subtotal_amount` takes precedence over the value derived from `quantity * unit_price` (which may not have the proper precision to exactly equal this amount). | getSubtotalAmount(): ?string | setSubtotalAmount(?string subtotalAmount): void |
| `discountAmount` | `?string` | Optional | The approximate discount of just this line.<br><br>The value is approximated in cases where rounding errors make it difficult to apportion exactly a total discount among many lines. Several lines may have been summed prior to applying the discount to arrive at `discount_amount` for the invoice - backing that out to the discount on a single line may introduce rounding or precision errors. | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `taxAmount` | `?string` | Optional | The approximate tax of just this line.<br><br>The value is approximated in cases where rounding errors make it difficult to apportion exactly a total tax among many lines. Several lines may have been summed prior to applying the tax rate to arrive at `tax_amount` for the invoice - backing that out to the tax on a single line may introduce rounding or precision errors. | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `totalAmount` | `?string` | Optional | The non-canonical total amount for the line.<br><br>`subtotal_amount` is the canonical amount for a line. The invoice `total_amount` is derived from the sum of the line `subtotal_amount`s and discounts or taxes applied thereafter.  Therefore, due to rounding or precision errors, the sum of line `total_amount`s may not equal the invoice `total_amount`. | getTotalAmount(): ?string | setTotalAmount(?string totalAmount): void |
| `tieredUnitPrice` | `?bool` | Optional | When `true`, indicates that the actual pricing scheme for the line was tiered, so the `unit_price` shown is the blended average for all units. | getTieredUnitPrice(): ?bool | setTieredUnitPrice(?bool tieredUnitPrice): void |
| `periodRangeStart` | `?string` | Optional | Start date for the period credited by this line. The format is `"YYYY-MM-DD"`. | getPeriodRangeStart(): ?string | setPeriodRangeStart(?string periodRangeStart): void |
| `periodRangeEnd` | `?string` | Optional | End date for the period credited by this line. The format is `"YYYY-MM-DD"`. | getPeriodRangeEnd(): ?string | setPeriodRangeEnd(?string periodRangeEnd): void |
| `productId` | `?int` | Optional | The ID of the product being credited.<br><br>This may be set even for component credits, so true product-only (non-component) credits will also have a nil `component_id`. | getProductId(): ?int | setProductId(?int productId): void |
| `productVersion` | `?int` | Optional | The version of the product being credited. | getProductVersion(): ?int | setProductVersion(?int productVersion): void |
| `componentId` | `?int` | Optional | The ID of the component being credited. Will be `nil` for non-component credits. | getComponentId(): ?int | setComponentId(?int componentId): void |
| `pricePointId` | `?int` | Optional | The price point ID of the component being credited. Will be `nil` for non-component credits. | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |

## Example (as JSON)

```json
{
  "uid": "uid4",
  "title": "title0",
  "description": "description6",
  "quantity": "quantity0",
  "unit_price": "unit_price2"
}
```

