
# Refund Invoice Event Data

Example schema for an `refund_invoice` event

## Structure

`RefundInvoiceEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `applyCredit` | `?bool` | Optional | If true, credit was created and applied it to the invoice. | getApplyCredit(): ?bool | setApplyCredit(?bool applyCredit): void |
| `consolidationLevel` | [`?string(InvoiceConsolidationLevel)`](../../doc/models/invoice-consolidation-level.md) | Optional | Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one of the following values:<br><br>* "none": A normal invoice with no consolidation.<br>* "child": An invoice segment which has been combined into a consolidated invoice.<br>* "parent": A consolidated invoice, whose contents are composed of invoice segments.<br><br>"Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate the member invoice segments.<br><br>See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-us/articles/4407746391835). | getConsolidationLevel(): ?string | setConsolidationLevel(?string consolidationLevel): void |
| `creditNoteAttributes` | [`?CreditNote`](../../doc/models/credit-note.md) | Optional | - | getCreditNoteAttributes(): ?CreditNote | setCreditNoteAttributes(?CreditNote creditNoteAttributes): void |
| `memo` | `?string` | Optional | The refund memo. | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | The full, original amount of the refund. | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `paymentId` | `?int` | Optional | The ID of the payment transaction to be refunded. | getPaymentId(): ?int | setPaymentId(?int paymentId): void |
| `refundAmount` | `?string` | Optional | The amount of the refund. | getRefundAmount(): ?string | setRefundAmount(?string refundAmount): void |
| `refundId` | `?int` | Optional | The ID of the refund transaction. | getRefundId(): ?int | setRefundId(?int refundId): void |
| `transactionTime` | `?DateTime` | Optional | The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |

## Example (as JSON)

```json
{
  "apply_credit": false,
  "consolidation_level": "parent",
  "credit_note_attributes": {
    "uid": "uid2",
    "site_id": 72,
    "customer_id": 184,
    "subscription_id": 0,
    "number": "number0"
  },
  "memo": "memo0",
  "original_amount": "original_amount0"
}
```

