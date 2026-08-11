
# Credit Note Application

## Structure

`CreditNoteApplication`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `transactionTime` | `?DateTime` | Optional | - | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `invoiceUid` | `?string` | Optional | - | getInvoiceUid(): ?string | setInvoiceUid(?string invoiceUid): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `appliedAmount` | `?string` | Optional | - | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreditNoteApplicationBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$creditNoteApplication = CreditNoteApplicationBuilder::init()
    ->uid('uid0')
    ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->invoiceUid('invoice_uid0')
    ->memo('memo4')
    ->appliedAmount('applied_amount8')
    ->build();
```

