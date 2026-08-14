
# Remove Payment Event Data

Example schema for an `remove_payment` event

## Structure

`RemovePaymentEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `int` | Required | Transaction ID of the original payment that was removed | getTransactionId(): int | setTransactionId(int transactionId): void |
| `memo` | `string` | Required | Memo of the original payment | getMemo(): string | setMemo(string memo): void |
| `originalAmount` | `?string` | Optional | Full amount of the original payment | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `string` | Required | Applied amount of the original payment | getAppliedAmount(): string | setAppliedAmount(string appliedAmount): void |
| `transactionTime` | `DateTime` | Required | Transaction time of the original payment, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): \DateTime | setTransactionTime(\DateTime transactionTime): void |
| `paymentMethod` | [PaymentMethodApplePay](../../doc/models/payment-method-apple-pay.md)\|[PaymentMethodBankAccount](../../doc/models/payment-method-bank-account.md)\|[PaymentMethodCreditCard](../../doc/models/payment-method-credit-card.md)\|[PaymentMethodExternal](../../doc/models/payment-method-external.md)\|[PaymentMethodPaypal](../../doc/models/payment-method-paypal.md) | Required | A nested data structure detailing the method of payment | getPaymentMethod(): | setPaymentMethod( paymentMethod): void |
| `prepayment` | `bool` | Required | The flag that shows whether the original payment was a prepayment or not | getPrepayment(): bool | setPrepayment(bool prepayment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RemovePaymentEventDataBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\PaymentMethodApplePayBuilder;
use AdvancedBillingLib\Models\InvoiceEventPaymentMethod;

$removePaymentEventData = RemovePaymentEventDataBuilder::init(
    20,
    'memo4',
    'applied_amount8',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    PaymentMethodApplePayBuilder::init(
        InvoiceEventPaymentMethod::APPLE_PAY
    )->build(),
    false
)
    ->originalAmount('original_amount4')
    ->build();
```

