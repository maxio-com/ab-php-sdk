
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

## Example (as JSON)

```json
{
  "transaction_id": 180,
  "memo": "memo0",
  "original_amount": "original_amount0",
  "applied_amount": "applied_amount2",
  "transaction_time": "2016-03-13T12:52:32.123Z",
  "payment_method": {
    "type": "apple_pay"
  },
  "prepayment": false
}
```

