
# Void Invoice Event Data

Example schema for an `void_invoice` event

## Structure

`VoidInvoiceEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creditNoteAttributes` | [`?CreditNote`](../../doc/models/credit-note.md) | Required | - | getCreditNoteAttributes(): ?CreditNote | setCreditNoteAttributes(?CreditNote creditNoteAttributes): void |
| `memo` | `?string` | Required | The memo provided during invoice voiding. | getMemo(): ?string | setMemo(?string memo): void |
| `appliedAmount` | `?string` | Required | The amount of the void. | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `transactionTime` | `?DateTime` | Required | The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `isAdvanceInvoice` | `bool` | Required | If true, the invoice is an advance invoice. | getIsAdvanceInvoice(): bool | setIsAdvanceInvoice(bool isAdvanceInvoice): void |
| `reason` | `string` | Required | The reason for the void. | getReason(): string | setReason(string reason): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\VoidInvoiceEventDataBuilder;
use AdvancedBillingLib\Models\Builders\CreditNoteBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$voidInvoiceEventData = VoidInvoiceEventDataBuilder::init(
    false,
    'reason8'
)
    ->creditNoteAttributes(
        CreditNoteBuilder::init()
            ->uid('uid2')
            ->siteId(72)
            ->customerId(184)
            ->subscriptionId(0)
            ->number('number0')
            ->build()
    )
    ->memo('memo6')
    ->appliedAmount('applied_amount6')
    ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

