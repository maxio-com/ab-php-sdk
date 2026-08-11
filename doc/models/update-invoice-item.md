
# Update Invoice Item

A line item change for a draft ad hoc invoice. Supports the same attributes as line items on invoice creation, plus `uid` and `_destroy` for updating or removing existing line items.

## Structure

`UpdateInvoiceItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `quantity` | float\|string\|null | Optional | This is a container for one-of cases. | getQuantity(): | setQuantity( quantity): void |
| `unitPrice` | float\|string\|null | Optional | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |
| `taxable` | `?bool` | Optional | Set to true to automatically calculate taxes. Site must be configured to use and calculate taxes. If using AvaTax, a tax_code parameter must also be sent. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the product type. This is especially important when using AvaTax to tax based on locale. This attribute has a max length of 25 characters. | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `periodRangeStart` | `?string` | Optional | YYYY-MM-DD | getPeriodRangeStart(): ?string | setPeriodRangeStart(?string periodRangeStart): void |
| `periodRangeEnd` | `?string` | Optional | YYYY-MM-DD | getPeriodRangeEnd(): ?string | setPeriodRangeEnd(?string periodRangeEnd): void |
| `productId` | string\|int\|null | Optional | This is a container for one-of cases. | getProductId(): | setProductId( productId): void |
| `componentId` | string\|int\|null | Optional | This is a container for one-of cases. | getComponentId(): | setComponentId( componentId): void |
| `pricePointId` | string\|int\|null | Optional | This is a container for one-of cases. | getPricePointId(): | setPricePointId( pricePointId): void |
| `productPricePointId` | string\|int\|null | Optional | This is a container for one-of cases. | getProductPricePointId(): | setProductPricePointId( productPricePointId): void |
| `description` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `uid` | `?string` | Optional | Unique identifier of an existing line item on the invoice. When provided, the matching line item is updated with the submitted attributes. When omitted, a new line item is added to the invoice. | getUid(): ?string | setUid(?string uid): void |
| `destroy` | `?bool` | Optional | Set to `true` together with `uid` to remove the matching line item from the invoice. Line items not referenced in the request remain unchanged. | getDestroy(): ?bool | setDestroy(?bool destroy): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateInvoiceItemBuilder;

$updateInvoiceItem = UpdateInvoiceItemBuilder::init()
    ->title('title8')
    ->quantity(
        94.82
    )
    ->unitPrice(
        78.04
    )
    ->taxable(false)
    ->taxCode('tax_code0')
    ->build();
```

