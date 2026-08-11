
# Failed Payment Event Data

Example schema for an `failed_payment` event

## Structure

`FailedPaymentEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountInCents` | `int` | Required | The monetary value of the payment, expressed in cents. | getAmountInCents(): int | setAmountInCents(int amountInCents): void |
| `appliedAmount` | `int` | Required | The monetary value of the payment, expressed in dollars. | getAppliedAmount(): int | setAppliedAmount(int appliedAmount): void |
| `memo` | `?string` | Optional | The memo passed when the payment was created. | getMemo(): ?string | setMemo(?string memo): void |
| `paymentMethod` | [`string(InvoicePaymentMethodType)`](../../doc/models/invoice-payment-method-type.md) | Required | - | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `transactionId` | `int` | Required | The transaction ID of the failed payment. | getTransactionId(): int | setTransactionId(int transactionId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\FailedPaymentEventDataBuilder;
use AdvancedBillingLib\Models\InvoicePaymentMethodType;

$failedPaymentEventData = FailedPaymentEventDataBuilder::init(
    34,
    196,
    InvoicePaymentMethodType::ACH,
    76
)
    ->memo('memo0')
    ->build();
```

