
# Create Payment

## Structure

`CreatePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `string` | Required | - | getAmount(): string | setAmount(string amount): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `paymentDetails` | `string` | Required | - | getPaymentDetails(): string | setPaymentDetails(string paymentDetails): void |
| `paymentMethod` | [`string(InvoicePaymentMethodType)`](../../doc/models/invoice-payment-method-type.md) | Required | The type of payment method used. Defaults to other. | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreatePaymentBuilder;
use AdvancedBillingLib\Models\InvoicePaymentMethodType;

$createPayment = CreatePaymentBuilder::init(
    'amount6',
    'memo8',
    'payment_details4',
    InvoicePaymentMethodType::CREDIT_CARD
)->build();
```

