
# Invoice Credit

## Structure

`InvoiceCredit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `creditNoteNumber` | `?string` | Optional | - | getCreditNoteNumber(): ?string | setCreditNoteNumber(?string creditNoteNumber): void |
| `creditNoteUid` | `?string` | Optional | - | getCreditNoteUid(): ?string | setCreditNoteUid(?string creditNoteUid): void |
| `transactionTime` | `?string` | Optional | - | getTransactionTime(): ?string | setTransactionTime(?string transactionTime): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | - | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | - | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |

## Example (as JSON)

```json
{
  "uid": "uid6",
  "credit_note_number": "credit_note_number0",
  "credit_note_uid": "credit_note_uid0",
  "transaction_time": "transaction_time8",
  "memo": "memo0"
}
```

