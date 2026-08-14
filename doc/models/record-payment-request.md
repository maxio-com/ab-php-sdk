
# Record Payment Request

## Structure

`RecordPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`CreatePayment`](../../doc/models/create-payment.md) | Required | - | getPayment(): CreatePayment | setPayment(CreatePayment payment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RecordPaymentRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreatePaymentBuilder;
use AdvancedBillingLib\Models\InvoicePaymentMethodType;

$recordPaymentRequest = RecordPaymentRequestBuilder::init(
    CreatePaymentBuilder::init(
        'amount8',
        'memo0',
        'payment_details6',
        InvoicePaymentMethodType::CASH
    )->build()
)->build();
```

