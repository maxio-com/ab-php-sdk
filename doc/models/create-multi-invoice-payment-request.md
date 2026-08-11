
# Create Multi Invoice Payment Request

## Structure

`CreateMultiInvoicePaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`CreateMultiInvoicePayment`](../../doc/models/create-multi-invoice-payment.md) | Required | - | getPayment(): CreateMultiInvoicePayment | setPayment(CreateMultiInvoicePayment payment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateMultiInvoicePaymentRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateMultiInvoicePaymentBuilder;
use AdvancedBillingLib\Models\Builders\CreateInvoicePaymentApplicationBuilder;
use AdvancedBillingLib\Models\InvoicePaymentMethodType;

$createMultiInvoicePaymentRequest = CreateMultiInvoicePaymentRequestBuilder::init(
    CreateMultiInvoicePaymentBuilder::init(
        'String9',
        [
            CreateInvoicePaymentApplicationBuilder::init(
                'invoice_uid8',
                'amount0'
            )->build()
        ]
    )
        ->memo('memo0')
        ->details('details6')
        ->method(InvoicePaymentMethodType::ACH)
        ->receivedOn('received_on8')
        ->build()
)->build();
```

