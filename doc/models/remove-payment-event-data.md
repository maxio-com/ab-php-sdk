
# Remove Payment Event Data

Example schema for an `remove_payment` event

## Structure

`RemovePaymentEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `?int` | Optional | Transaction ID of the original payment that was removed | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `memo` | `?string` | Optional | Memo of the original payment | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | Full amount of the original payment | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | Applied amount of the original payment | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `transactionTime` | `?DateTime` | Optional | Transaction time of the original payment, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `paymentMethod` | [PaymentMethodApplePayType](../../doc/models/payment-method-apple-pay-type.md)\|[PaymentMethodBankAccountType](../../doc/models/payment-method-bank-account-type.md)\|[PaymentMethodCreditCardType](../../doc/models/payment-method-credit-card-type.md)\|[PaymentMethodExternalType](../../doc/models/payment-method-external-type.md)\|[PaymentMethodPaypalType](../../doc/models/payment-method-paypal-type.md)\|null | Optional | This is a container for one-of cases. | getPaymentMethod(): | setPaymentMethod( paymentMethod): void |
| `prepayment` | `?bool` | Optional | The flag that shows whether the original payment was a prepayment or not | getPrepayment(): ?bool | setPrepayment(?bool prepayment): void |

## Example (as JSON)

```json
{
  "transaction_id": 180,
  "memo": "memo0",
  "original_amount": "original_amount0",
  "applied_amount": "applied_amount2",
  "transaction_time": "2016-03-13T12:52:32.123Z"
}
```

