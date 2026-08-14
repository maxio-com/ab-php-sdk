
# Payment Method Paypal

## Structure

`PaymentMethodPaypal`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `type` | [`string(InvoiceEventPaymentMethod)`](../../doc/models/invoice-event-payment-method.md) | Required | - | getType(): string | setType(string type): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentMethodPaypalBuilder;
use AdvancedBillingLib\Models\InvoiceEventPaymentMethod;

$paymentMethodPaypal = PaymentMethodPaypalBuilder::init(
    'email8',
    InvoiceEventPaymentMethod::PAYPAL_ACCOUNT
)->build();
```

