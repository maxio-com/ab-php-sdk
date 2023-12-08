
# Invoice Refund

## Structure

`InvoiceRefund`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `?int` | Optional | - | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `paymentId` | `?int` | Optional | - | getPaymentId(): ?int | setPaymentId(?int paymentId): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | - | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | - | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `gatewayTransactionId` | `?string` | Optional | The transaction ID for the refund as returned from the payment gateway | getGatewayTransactionId(): ?string | setGatewayTransactionId(?string gatewayTransactionId): void |

## Example (as JSON)

```json
{
  "transaction_id": 172,
  "payment_id": 42,
  "memo": "memo6",
  "original_amount": "original_amount6",
  "applied_amount": "applied_amount6"
}
```

