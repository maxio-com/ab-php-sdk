
# Void Invoice Event Data

Example schema for an `void_invoice` event

## Structure

`VoidInvoiceEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creditNoteAttributes` | [`?CreditNote`](../../doc/models/credit-note.md) | Optional | - | getCreditNoteAttributes(): ?CreditNote | setCreditNoteAttributes(?CreditNote creditNoteAttributes): void |
| `memo` | `?string` | Optional | The memo provided during invoice voiding. | getMemo(): ?string | setMemo(?string memo): void |
| `appliedAmount` | `?string` | Optional | The amount of the void. | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `transactionTime` | `?DateTime` | Optional | The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `isAdvanceInvoice` | `?bool` | Optional | If true, the invoice is an advance invoice. | getIsAdvanceInvoice(): ?bool | setIsAdvanceInvoice(?bool isAdvanceInvoice): void |

## Example (as JSON)

```json
{
  "credit_note_attributes": {
    "uid": "uid2",
    "site_id": 72,
    "customer_id": 184,
    "subscription_id": 0,
    "number": "number0"
  },
  "memo": "memo6",
  "applied_amount": "applied_amount6",
  "transaction_time": "2016-03-13T12:52:32.123Z",
  "is_advance_invoice": false
}
```

