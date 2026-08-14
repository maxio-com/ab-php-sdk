
# Payment Method Bank Account

## Structure

`PaymentMethodBankAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `maskedAccountNumber` | `string` | Required | - | getMaskedAccountNumber(): string | setMaskedAccountNumber(string maskedAccountNumber): void |
| `maskedRoutingNumber` | `string` | Required | - | getMaskedRoutingNumber(): string | setMaskedRoutingNumber(string maskedRoutingNumber): void |
| `type` | [`string(InvoiceEventPaymentMethod)`](../../doc/models/invoice-event-payment-method.md) | Required | - | getType(): string | setType(string type): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentMethodBankAccountBuilder;
use AdvancedBillingLib\Models\InvoiceEventPaymentMethod;

$paymentMethodBankAccount = PaymentMethodBankAccountBuilder::init(
    'masked_account_number4',
    'masked_routing_number4',
    InvoiceEventPaymentMethod::BANK_ACCOUNT
)->build();
```

