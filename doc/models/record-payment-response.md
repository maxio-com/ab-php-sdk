
# Record Payment Response

## Structure

`RecordPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paidInvoices` | [`?(PaidInvoice[])`](../../doc/models/paid-invoice.md) | Optional | - | getPaidInvoices(): ?array | setPaidInvoices(?array paidInvoices): void |
| `prepayment` | [`?InvoicePrePayment`](../../doc/models/invoice-pre-payment.md) | Optional | - | getPrepayment(): ?InvoicePrePayment | setPrepayment(?InvoicePrePayment prepayment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RecordPaymentResponseBuilder;
use AdvancedBillingLib\Models\Builders\PaidInvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceStatus;
use AdvancedBillingLib\Models\Builders\InvoicePrePaymentBuilder;

$recordPaymentResponse = RecordPaymentResponseBuilder::init()
    ->paidInvoices(
        [
            PaidInvoiceBuilder::init()
                ->invoiceId('invoice_id8')
                ->status(InvoiceStatus::DRAFT)
                ->dueAmount('due_amount0')
                ->paidAmount('paid_amount0')
                ->build()
        ]
    )
    ->prepayment(
        InvoicePrePaymentBuilder::init()
            ->subscriptionId(148)
            ->amountInCents(124)
            ->endingBalanceInCents(164)
            ->build()
    )
    ->build();
```

