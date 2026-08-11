
# Invoice Credit

## Structure

`InvoiceCredit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `creditNoteNumber` | `?string` | Optional | - | getCreditNoteNumber(): ?string | setCreditNoteNumber(?string creditNoteNumber): void |
| `creditNoteUid` | `?string` | Optional | - | getCreditNoteUid(): ?string | setCreditNoteUid(?string creditNoteUid): void |
| `transactionTime` | `?DateTime` | Optional | - | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | - | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | - | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceCreditBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$invoiceCredit = InvoiceCreditBuilder::init()
    ->uid('uid8')
    ->creditNoteNumber('credit_note_number2')
    ->creditNoteUid('credit_note_uid2')
    ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->memo('memo2')
    ->build();
```

