
# Invoice Debit

## Structure

`InvoiceDebit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `debitNoteNumber` | `?string` | Optional | - | getDebitNoteNumber(): ?string | setDebitNoteNumber(?string debitNoteNumber): void |
| `debitNoteUid` | `?string` | Optional | - | getDebitNoteUid(): ?string | setDebitNoteUid(?string debitNoteUid): void |
| `role` | [`?string(DebitNoteRole)`](../../doc/models/debit-note-role.md) | Optional | The role of the debit note. | getRole(): ?string | setRole(?string role): void |
| `transactionTime` | `?DateTime` | Optional | - | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | - | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | - | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |

## Example (as JSON)

```json
{
  "uid": "uid2",
  "debit_note_number": "debit_note_number2",
  "debit_note_uid": "debit_note_uid8",
  "role": "chargeback",
  "transaction_time": "2016-03-13T12:52:32.123Z"
}
```

