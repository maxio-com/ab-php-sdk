
# Invoice Event 1

The event data is the data that, when combined with the command, results in the output invoice found in the invoice field.

## Structure

`InvoiceEvent1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | Unique identifier for the credit note application. It is generated automatically by Chargify and has the prefix "cdt_" followed by alphanumeric characters. | getUid(): ?string | setUid(?string uid): void |
| `creditNoteNumber` | `?string` | Optional | A unique, identifying string that appears on the credit note and in places it is referenced. | getCreditNoteNumber(): ?string | setCreditNoteNumber(?string creditNoteNumber): void |
| `creditNoteUid` | `?string` | Optional | Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix "cn_" followed by alphanumeric characters. | getCreditNoteUid(): ?string | setCreditNoteUid(?string creditNoteUid): void |
| `originalAmount` | `?string` | Optional | The full, original amount of the credit note. | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | The amount of the credit note applied to invoice. | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `transactionTime` | `?DateTime` | Optional | The time the credit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `memo` | `?string` | Optional | The credit note memo. | getMemo(): ?string | setMemo(?string memo): void |
| `role` | `?string` | Optional | The role of the credit note (e.g. 'general') | getRole(): ?string | setRole(?string role): void |
| `consolidatedInvoice` | `?bool` | Optional | Shows whether it was applied to consolidated invoice or not | getConsolidatedInvoice(): ?bool | setConsolidatedInvoice(?bool consolidatedInvoice): void |
| `appliedCreditNotes` | [`?(AppliedCreditNote[])`](../../doc/models/applied-credit-note.md) | Optional | List of credit notes applied to children invoices (if consolidated invoice) | getAppliedCreditNotes(): ?array | setAppliedCreditNotes(?array appliedCreditNotes): void |
| `debitNoteNumber` | `?string` | Optional | A unique, identifying string that appears on the debit note and in places it is referenced. | getDebitNoteNumber(): ?string | setDebitNoteNumber(?string debitNoteNumber): void |
| `debitNoteUid` | `?string` | Optional | Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix "db_" followed by alphanumeric characters. | getDebitNoteUid(): ?string | setDebitNoteUid(?string debitNoteUid): void |
| `paymentMethod` | [PaymentMethodApplePayType](../../doc/models/payment-method-apple-pay-type.md)\|[PaymentMethodBankAccountType](../../doc/models/payment-method-bank-account-type.md)\|[PaymentMethodCreditCardType](../../doc/models/payment-method-credit-card-type.md)\|[PaymentMethodExternalType](../../doc/models/payment-method-external-type.md)\|[PaymentMethodPaypalType](../../doc/models/payment-method-paypal-type.md)\|null | Optional | This is a container for one-of cases. | getPaymentMethod(): | setPaymentMethod( paymentMethod): void |
| `transactionId` | `?int` | Optional | The Chargify id of the original payment | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `fromCollectionMethod` | `?string` | Optional | The previous collection method of the invoice. | getFromCollectionMethod(): ?string | setFromCollectionMethod(?string fromCollectionMethod): void |
| `toCollectionMethod` | `?string` | Optional | The new collection method of the invoice. | getToCollectionMethod(): ?string | setToCollectionMethod(?string toCollectionMethod): void |
| `consolidationLevel` | [`?string(InvoiceConsolidationLevel)`](../../doc/models/invoice-consolidation-level.md) | Optional | Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one of the following values:<br><br>* "none": A normal invoice with no consolidation.<br>* "child": An invoice segment which has been combined into a consolidated invoice.<br>* "parent": A consolidated invoice, whose contents are composed of invoice segments.<br><br>"Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate the member invoice segments.<br><br>See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-us/articles/4407746391835). | getConsolidationLevel(): ?string | setConsolidationLevel(?string consolidationLevel): void |
| `fromStatus` | [`?string(Status)`](../../doc/models/status.md) | Optional | The status of the invoice before event occurence. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more. | getFromStatus(): ?string | setFromStatus(?string fromStatus): void |
| `toStatus` | [`?string(Status)`](../../doc/models/status.md) | Optional | The status of the invoice after event occurence. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more. | getToStatus(): ?string | setToStatus(?string toStatus): void |
| `dueAmount` | `?string` | Optional | Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`. | getDueAmount(): ?string | setDueAmount(?string dueAmount): void |
| `totalAmount` | `?string` | Optional | The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.' | getTotalAmount(): ?string | setTotalAmount(?string totalAmount): void |
| `applyCredit` | `?bool` | Optional | If true, credit was created and applied it to the invoice. | getApplyCredit(): ?bool | setApplyCredit(?bool applyCredit): void |
| `creditNoteAttributes` | [`?CreditNote1`](../../doc/models/credit-note-1.md) | Optional | - | getCreditNoteAttributes(): ?CreditNote1 | setCreditNoteAttributes(?CreditNote1 creditNoteAttributes): void |
| `paymentId` | `?int` | Optional | The ID of the payment transaction to be refunded. | getPaymentId(): ?int | setPaymentId(?int paymentId): void |
| `refundAmount` | `?string` | Optional | The amount of the refund. | getRefundAmount(): ?string | setRefundAmount(?string refundAmount): void |
| `refundId` | `?int` | Optional | The ID of the refund transaction. | getRefundId(): ?int | setRefundId(?int refundId): void |
| `prepayment` | `?bool` | Optional | The flag that shows whether the original payment was a prepayment or not | getPrepayment(): ?bool | setPrepayment(?bool prepayment): void |
| `isAdvanceInvoice` | `?bool` | Optional | If true, the invoice is an advance invoice. | getIsAdvanceInvoice(): ?bool | setIsAdvanceInvoice(?bool isAdvanceInvoice): void |

## Example (as JSON)

```json
{
  "uid": "uid0",
  "credit_note_number": "credit_note_number4",
  "credit_note_uid": "credit_note_uid4",
  "original_amount": "original_amount4",
  "applied_amount": "applied_amount8"
}
```

