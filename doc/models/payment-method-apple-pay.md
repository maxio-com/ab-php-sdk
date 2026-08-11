
# Payment Method Apple Pay

## Structure

`PaymentMethodApplePay`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string(InvoiceEventPaymentMethod)`](../../doc/models/invoice-event-payment-method.md) | Required | - | getType(): string | setType(string type): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentMethodApplePayBuilder;
use AdvancedBillingLib\Models\InvoiceEventPaymentMethod;

$paymentMethodApplePay = PaymentMethodApplePayBuilder::init(
    InvoiceEventPaymentMethod::APPLE_PAY
)->build();
```

