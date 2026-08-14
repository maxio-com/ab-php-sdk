
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

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceDebitBuilder;
use AdvancedBillingLib\Models\DebitNoteRole;
use AdvancedBillingLib\Utils\DateTimeHelper;

$invoiceDebit = InvoiceDebitBuilder::init()
    ->uid('uid8')
    ->debitNoteNumber('debit_note_number8')
    ->debitNoteUid('debit_note_uid4')
    ->role(DebitNoteRole::CHARGEBACK)
    ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

