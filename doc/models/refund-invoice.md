
# Refund Invoice

Refund an invoice or a segment of a consolidated invoice.

## Structure

`RefundInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `string` | Required | The amount to be refunded in decimal format as a string. Example: "10.50". Must not exceed the remaining refundable balance of the payment. | getAmount(): string | setAmount(string amount): void |
| `memo` | `string` | Required | A description that will be attached to the refund | getMemo(): string | setMemo(string memo): void |
| `paymentId` | `int` | Required | The ID of the payment to be refunded | getPaymentId(): int | setPaymentId(int paymentId): void |
| `external` | `?bool` | Optional | Flag that marks refund as external (no money is returned to the customer). Defaults to `false`. | getExternal(): ?bool | setExternal(?bool external): void |
| `applyCredit` | `?bool` | Optional | If set to true, creates credit and applies it to an invoice. Defaults to `false`. | getApplyCredit(): ?bool | setApplyCredit(?bool applyCredit): void |
| `voidInvoice` | `?bool` | Optional | If `apply_credit` set to false and refunding full amount, if `void_invoice` set to true, invoice will be voided after refund. Defaults to `false`. | getVoidInvoice(): ?bool | setVoidInvoice(?bool voidInvoice): void |

## Example (as JSON)

```json
{
  "amount": "amount8",
  "memo": "memo0",
  "payment_id": 0,
  "external": false,
  "apply_credit": false,
  "void_invoice": false
}
```

