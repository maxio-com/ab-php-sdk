
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

## Example (as JSON)

```json
{
  "amount_in_cents": 128,
  "applied_amount": 154,
  "memo": "memo2",
  "payment_method": "credit_card",
  "transaction_id": 170
}
```

