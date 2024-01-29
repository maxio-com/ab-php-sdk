
# Void Invoice Event Data

Example schema for an `void_invoice` event

## Structure

`VoidInvoiceEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creditNoteAttributes` | [CreditNote](../../doc/models/credit-note.md)\|null | Required | This is a container for one-of cases. | getCreditNoteAttributes(): ?CreditNote | setCreditNoteAttributes(?CreditNote creditNoteAttributes): void |
| `memo` | `?string` | Required | The memo provided during invoice voiding. | getMemo(): ?string | setMemo(?string memo): void |
| `appliedAmount` | `?string` | Required | The amount of the void. | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `transactionTime` | `?DateTime` | Required | The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `isAdvanceInvoice` | `bool` | Required | If true, the invoice is an advance invoice. | getIsAdvanceInvoice(): bool | setIsAdvanceInvoice(bool isAdvanceInvoice): void |
| `reason` | `string` | Required | The reason for the void. | getReason(): string | setReason(string reason): void |

## Example (as JSON)

```json
{
  "credit_note_attributes": {
    "uid": "uid2",
    "site_id": 218,
    "customer_id": 74,
    "subscription_id": 146,
    "number": "number0"
  },
  "memo": "memo6",
  "applied_amount": "applied_amount6",
  "transaction_time": "2016-03-13T12:52:32.123Z",
  "is_advance_invoice": false,
  "reason": "reason8"
}
```

