
# Apply Credit Note Event Data

Example schema for an `apply_credit_note` event

## Structure

`ApplyCreditNoteEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `string` | Required | Unique identifier for the credit note application. It is generated automatically by Chargify and has the prefix "cdt_" followed by alphanumeric characters. | getUid(): string | setUid(string uid): void |
| `creditNoteNumber` | `string` | Required | A unique, identifying string that appears on the credit note and in places it is referenced. | getCreditNoteNumber(): string | setCreditNoteNumber(string creditNoteNumber): void |
| `creditNoteUid` | `string` | Required | Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix "cn_" followed by alphanumeric characters. | getCreditNoteUid(): string | setCreditNoteUid(string creditNoteUid): void |
| `originalAmount` | `string` | Required | The full, original amount of the credit note. | getOriginalAmount(): string | setOriginalAmount(string originalAmount): void |
| `appliedAmount` | `string` | Required | The amount of the credit note applied to invoice. | getAppliedAmount(): string | setAppliedAmount(string appliedAmount): void |
| `transactionTime` | `?DateTime` | Optional | The time the credit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `memo` | `?string` | Optional | The credit note memo. | getMemo(): ?string | setMemo(?string memo): void |
| `role` | `?string` | Optional | The role of the credit note (e.g. 'general') | getRole(): ?string | setRole(?string role): void |
| `consolidatedInvoice` | `?bool` | Optional | Shows whether it was applied to consolidated invoice or not. | getConsolidatedInvoice(): ?bool | setConsolidatedInvoice(?bool consolidatedInvoice): void |
| `appliedCreditNotes` | [`?(AppliedCreditNoteData[])`](../../doc/models/applied-credit-note-data.md) | Optional | List of credit notes applied to children invoices (if consolidated invoice) | getAppliedCreditNotes(): ?array | setAppliedCreditNotes(?array appliedCreditNotes): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ApplyCreditNoteEventDataBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\AppliedCreditNoteDataBuilder;

$applyCreditNoteEventData = ApplyCreditNoteEventDataBuilder::init(
    'uid0',
    'credit_note_number6',
    'credit_note_uid4',
    'original_amount4',
    'applied_amount8'
)
    ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->memo('memo4')
    ->role('role4')
    ->consolidatedInvoice(false)
    ->appliedCreditNotes(
        [
            AppliedCreditNoteDataBuilder::init()
                ->uid('uid4')
                ->number('number8')
                ->build(),
            AppliedCreditNoteDataBuilder::init()
                ->uid('uid4')
                ->number('number8')
                ->build(),
            AppliedCreditNoteDataBuilder::init()
                ->uid('uid4')
                ->number('number8')
                ->build()
        ]
    )
    ->build();
```

