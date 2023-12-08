
# Create Invoice Item

## Structure

`CreateInvoiceItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `quantity` | float\|string\|null | Optional | This is a container for one-of cases. | getQuantity(): | setQuantity( quantity): void |
| `unitPrice` | float\|string\|null | Optional | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |
| `taxable` | `?bool` | Optional | Set to true to automatically calculate taxes. Site must be configured to use and calculate taxes.<br><br>If using Avalara, a tax_code parameter must also be sent. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `taxCode` | `?string` | Optional | - | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `periodRangeStart` | `?string` | Optional | YYYY-MM-DD | getPeriodRangeStart(): ?string | setPeriodRangeStart(?string periodRangeStart): void |
| `periodRangeEnd` | `?string` | Optional | YYYY-MM-DD | getPeriodRangeEnd(): ?string | setPeriodRangeEnd(?string periodRangeEnd): void |
| `productId` | string\|int\|null | Optional | This is a container for one-of cases. | getProductId(): | setProductId( productId): void |
| `componentId` | string\|int\|null | Optional | This is a container for one-of cases. | getComponentId(): | setComponentId( componentId): void |
| `pricePointId` | string\|int\|null | Optional | This is a container for one-of cases. | getPricePointId(): | setPricePointId( pricePointId): void |
| `productPricePointId` | string\|int\|null | Optional | This is a container for one-of cases. | getProductPricePointId(): | setProductPricePointId( productPricePointId): void |
| `description` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "title": "title2",
  "quantity": 154.86,
  "unit_price": 138.08,
  "taxable": false,
  "tax_code": "tax_code4"
}
```

