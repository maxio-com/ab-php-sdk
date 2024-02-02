
# Apply Payment Event Data

Example schema for an `apply_payment` event

## Structure

`ApplyPaymentEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `memo` | `string` | Required | The payment memo | getMemo(): string | setMemo(string memo): void |
| `originalAmount` | `string` | Required | The full, original amount of the payment transaction as a string in full units. Incoming payments can be split amongst several invoices, which will result in a `applied_amount` less than the `original_amount`. Example: A $100.99 payment, of which $40.11 is applied to this invoice, will have an `original_amount` of `"100.99"`. | getOriginalAmount(): string | setOriginalAmount(string originalAmount): void |
| `appliedAmount` | `string` | Required | The amount of the payment applied to this invoice. Incoming payments can be split amongst several invoices, which will result in a `applied_amount` less than the `original_amount`. Example: A $100.99 payment, of which $40.11 is applied to this invoice, will have an `applied_amount` of `"40.11"`. | getAppliedAmount(): string | setAppliedAmount(string appliedAmount): void |
| `transactionTime` | `DateTime` | Required | The time the payment was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): \DateTime | setTransactionTime(\DateTime transactionTime): void |
| `paymentMethod` | [PaymentMethodApplePay](../../doc/models/payment-method-apple-pay.md)\|[PaymentMethodBankAccount](../../doc/models/payment-method-bank-account.md)\|[PaymentMethodCreditCard](../../doc/models/payment-method-credit-card.md)\|[PaymentMethodExternal](../../doc/models/payment-method-external.md)\|[PaymentMethodPaypal](../../doc/models/payment-method-paypal.md) | Required | A nested data structure detailing the method of payment | getPaymentMethod(): | setPaymentMethod( paymentMethod): void |
| `transactionId` | `?int` | Optional | The Chargify id of the original payment | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `parentInvoiceNumber` | `?int` | Optional | - | getParentInvoiceNumber(): ?int | setParentInvoiceNumber(?int parentInvoiceNumber): void |
| `remainingPrepaymentAmount` | `?string` | Optional | - | getRemainingPrepaymentAmount(): ?string | setRemainingPrepaymentAmount(?string remainingPrepaymentAmount): void |
| `prepayment` | `?bool` | Optional | - | getPrepayment(): ?bool | setPrepayment(?bool prepayment): void |
| `external` | `?bool` | Optional | - | getExternal(): ?bool | setExternal(?bool external): void |

## Example (as JSON)

```json
{
  "memo": "memo8",
  "original_amount": "original_amount8",
  "applied_amount": "applied_amount4",
  "transaction_time": "2016-03-13T12:52:32.123Z",
  "payment_method": {
    "type": "apple_pay"
  },
  "transaction_id": 196,
  "parent_invoice_number": 174,
  "remaining_prepayment_amount": "remaining_prepayment_amount6",
  "prepayment": false,
  "external": false
}
```

