
# Create Invoice Payment Request

## Structure

`CreateInvoicePaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`CreateInvoicePayment`](../../doc/models/create-invoice-payment.md) | Required | - | getPayment(): CreateInvoicePayment | setPayment(CreateInvoicePayment payment): void |
| `type` | [`?string(InvoicePaymentType)`](../../doc/models/invoice-payment-type.md) | Optional | The type of payment to be applied to an Invoice. Defaults to external. | getType(): ?string | setType(?string type): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateInvoicePaymentRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateInvoicePaymentBuilder;
use AdvancedBillingLib\Models\InvoicePaymentMethodType;
use AdvancedBillingLib\Models\InvoicePaymentType;

$createInvoicePaymentRequest = CreateInvoicePaymentRequestBuilder::init(
    CreateInvoicePaymentBuilder::init()
        ->amount(
            'String9'
        )
        ->memo('memo0')
        ->method(InvoicePaymentMethodType::ACH)
        ->details('details6')
        ->paymentProfileId(42)
        ->build()
)
    ->type(InvoicePaymentType::EXTERNAL)
    ->build();
```

