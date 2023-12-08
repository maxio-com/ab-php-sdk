
# Apply Debit Note Event Data

Example schema for an `apply_debit_note` event

## Structure

`ApplyDebitNoteEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `debitNoteNumber` | `?string` | Optional | A unique, identifying string that appears on the debit note and in places it is referenced. | getDebitNoteNumber(): ?string | setDebitNoteNumber(?string debitNoteNumber): void |
| `debitNoteUid` | `?string` | Optional | Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix "db_" followed by alphanumeric characters. | getDebitNoteUid(): ?string | setDebitNoteUid(?string debitNoteUid): void |
| `originalAmount` | `?string` | Optional | The full, original amount of the debit note. | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | The amount of the debit note applied to invoice. | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |

## Example (as JSON)

```json
{
  "debit_note_number": "debit_note_number0",
  "debit_note_uid": "debit_note_uid6",
  "original_amount": "original_amount4",
  "applied_amount": "applied_amount8"
}
```

