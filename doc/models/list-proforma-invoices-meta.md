
# List Proforma Invoices Meta

## Structure

`ListProformaInvoicesMeta`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalCount` | `?int` | Optional | - | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `currentPage` | `?int` | Optional | - | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `totalPages` | `?int` | Optional | - | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `statusCode` | `?int` | Optional | - | getStatusCode(): ?int | setStatusCode(?int statusCode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListProformaInvoicesMetaBuilder;

$listProformaInvoicesMeta = ListProformaInvoicesMetaBuilder::init()
    ->totalCount(50)
    ->currentPage(26)
    ->totalPages(38)
    ->statusCode(68)
    ->build();
```

