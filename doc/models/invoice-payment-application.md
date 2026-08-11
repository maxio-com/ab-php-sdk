
# Invoice Payment Application

## Structure

`InvoicePaymentApplication`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoiceUid` | `?string` | Optional | Unique identifier for the paid invoice. It has the prefix "inv_" followed by alphanumeric characters. | getInvoiceUid(): ?string | setInvoiceUid(?string invoiceUid): void |
| `applicationUid` | `?string` | Optional | Unique identifier for the payment. It has the prefix "pmt_" followed by alphanumeric characters. | getApplicationUid(): ?string | setApplicationUid(?string applicationUid): void |
| `appliedAmount` | `?string` | Optional | Dollar amount of the paid invoice. | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoicePaymentApplicationBuilder;

$invoicePaymentApplication = InvoicePaymentApplicationBuilder::init()
    ->invoiceUid('invoice_uid8')
    ->applicationUid('application_uid8')
    ->appliedAmount('applied_amount0')
    ->build();
```

