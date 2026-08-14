
# Paid Invoice

## Structure

`PaidInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoiceId` | `?string` | Optional | The uid of the paid invoice | getInvoiceId(): ?string | setInvoiceId(?string invoiceId): void |
| `status` | [`?string(InvoiceStatus)`](../../doc/models/invoice-status.md) | Optional | The current status of the invoice. See [Invoice Statuses](https://maxio.zendesk.com/hc/en-us/articles/24252287829645-Advanced-Billing-Invoices-Overview#invoice-statuses) for more. | getStatus(): ?string | setStatus(?string status): void |
| `dueAmount` | `?string` | Optional | The remaining due amount on the invoice | getDueAmount(): ?string | setDueAmount(?string dueAmount): void |
| `paidAmount` | `?string` | Optional | The total amount paid on this invoice (including any prior payments) | getPaidAmount(): ?string | setPaidAmount(?string paidAmount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaidInvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceStatus;

$paidInvoice = PaidInvoiceBuilder::init()
    ->invoiceId('invoice_id2')
    ->status(InvoiceStatus::CANCELED)
    ->dueAmount('due_amount4')
    ->paidAmount('paid_amount6')
    ->build();
```

