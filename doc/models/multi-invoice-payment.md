
# Multi Invoice Payment

## Structure

`MultiInvoicePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `?int` | Optional | The numeric ID of the transaction. | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `totalAmount` | `?string` | Optional | Dollar amount of the sum of the paid invoices. | getTotalAmount(): ?string | setTotalAmount(?string totalAmount): void |
| `currencyCode` | `?string` | Optional | The ISO 4217 currency code (3 character string) representing the currency of invoice transaction. | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `applications` | [`?(InvoicePaymentApplication[])`](../../doc/models/invoice-payment-application.md) | Optional | - | getApplications(): ?array | setApplications(?array applications): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MultiInvoicePaymentBuilder;
use AdvancedBillingLib\Models\Builders\InvoicePaymentApplicationBuilder;

$multiInvoicePayment = MultiInvoicePaymentBuilder::init()
    ->transactionId(246)
    ->totalAmount('total_amount0')
    ->currencyCode('currency_code0')
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
                ->build()
        ]
    )
    ->build();
```

