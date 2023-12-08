
# Apply Payment Event Data

Example schema for an `apply_payment` event

## Structure

`ApplyPaymentEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `memo` | `?string` | Optional | The payment memo | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | The full, original amount of the payment transaction as a string in full units. Incoming payments can be split amongst several invoices, which will result in a `applied_amount` less than the `original_amount`. Example: A $100.99 payment, of which $40.11 is applied to this invoice, will have an `original_amount` of `"100.99"`. | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | The amount of the payment applied to this invoice. Incoming payments can be split amongst several invoices, which will result in a `applied_amount` less than the `original_amount`. Example: A $100.99 payment, of which $40.11 is applied to this invoice, will have an `applied_amount` of `"40.11"`. | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `transactionTime` | `?DateTime` | Optional | The time the payment was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `paymentMethod` | [PaymentMethodApplePayType](../../doc/models/payment-method-apple-pay-type.md)\|[PaymentMethodBankAccountType](../../doc/models/payment-method-bank-account-type.md)\|[PaymentMethodCreditCardType](../../doc/models/payment-method-credit-card-type.md)\|[PaymentMethodExternalType](../../doc/models/payment-method-external-type.md)\|[PaymentMethodPaypalType](../../doc/models/payment-method-paypal-type.md)\|null | Optional | This is a container for one-of cases. | getPaymentMethod(): | setPaymentMethod( paymentMethod): void |
| `transactionId` | `?int` | Optional | The Chargify id of the original payment | getTransactionId(): ?int | setTransactionId(?int transactionId): void |

## Example (as JSON)

```json
{
  "memo": "memo8",
  "original_amount": "original_amount8",
  "applied_amount": "applied_amount4",
  "transaction_time": "2016-03-13T12:52:32.123Z",
  "payment_method": {
    "type": "type4"
  }
}
```

