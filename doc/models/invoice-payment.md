
# Invoice Payment

## Structure

`InvoicePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionTime` | `?string` | Optional | - | getTransactionTime(): ?string | setTransactionTime(?string transactionTime): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | - | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | - | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `paymentMethod` | [`?InvoicePaymentMethod`](../../doc/models/invoice-payment-method.md) | Optional | - | getPaymentMethod(): ?InvoicePaymentMethod | setPaymentMethod(?InvoicePaymentMethod paymentMethod): void |
| `transactionId` | `?int` | Optional | - | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `prepayment` | `?bool` | Optional | - | getPrepayment(): ?bool | setPrepayment(?bool prepayment): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `gatewayUsed` | `?string` | Optional | - | getGatewayUsed(): ?string | setGatewayUsed(?string gatewayUsed): void |
| `gatewayTransactionId` | `?string` | Optional | The transaction ID for the payment as returned from the payment gateway | getGatewayTransactionId(): ?string | setGatewayTransactionId(?string gatewayTransactionId): void |

## Example (as JSON)

```json
{
  "transaction_time": "transaction_time4",
  "memo": "memo6",
  "original_amount": "original_amount6",
  "applied_amount": "applied_amount6",
  "payment_method": {
    "details": "details0",
    "kind": "kind8",
    "memo": "memo4",
    "type": "type0",
    "card_brand": "card_brand6"
  }
}
```

