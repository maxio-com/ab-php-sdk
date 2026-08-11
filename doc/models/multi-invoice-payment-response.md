
# Multi Invoice Payment Response

## Structure

`MultiInvoicePaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`MultiInvoicePayment`](../../doc/models/multi-invoice-payment.md) | Required | - | getPayment(): MultiInvoicePayment | setPayment(MultiInvoicePayment payment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MultiInvoicePaymentResponseBuilder;
use AdvancedBillingLib\Models\Builders\MultiInvoicePaymentBuilder;
use AdvancedBillingLib\Models\Builders\InvoicePaymentApplicationBuilder;

$multiInvoicePaymentResponse = MultiInvoicePaymentResponseBuilder::init(
    MultiInvoicePaymentBuilder::init()
        ->transactionId(224)
        ->totalAmount('total_amount2')
        ->currencyCode('currency_code2')
        ->applications(
            [
                InvoicePaymentApplicationBuilder::init()
                    ->invoiceUid('invoice_uid8')
                    ->applicationUid('application_uid8')
                    ->appliedAmount('applied_amount0')
                    ->build(),
                InvoicePaymentApplicationBuilder::init()
                    ->invoiceUid('invoice_uid8')
                    ->applicationUid('application_uid8')
                    ->appliedAmount('applied_amount0')
                    ->build(),
                InvoicePaymentApplicationBuilder::init()
                    ->invoiceUid('invoice_uid8')
                    ->applicationUid('application_uid8')
                    ->appliedAmount('applied_amount0')
                    ->build()
            ]
        )
        ->build()
)->build();
```

